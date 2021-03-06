<?php
    /**
     * Botchan configuration
     *
     * @package botchan
     * @since 0.1
     */

    class Botchan_Config {
        
        private $settings;
        
        public function __construct( $botchan_settings ) {
            $this->settings = $botchan_settings;
            $this->theme_support();
            $this->setup_actions();
            $this->setup_filters();
            $this->image_sizes();
            $this->content_width();
        }

        private function setup_actions() {
            add_action( 'customize_register', array( $this, 'customizer' ) );
            add_action( 'wp_enqueue_scripts', array($this, 'enqueue') );
            add_action( 'admin_init', array($this, 'admin_styles') );
            add_action( 'widgets_init', array($this, 'sidebars') );
            add_action( 'init', array($this, 'menus') );  
            add_action( 'after_setup_theme', array( $this, 'register_navwalker' ) );      
        }

        private function setup_filters() {
            add_filter( 'embed_oembed_html', array($this, 'responsive_video'), 10, 4);
            add_filter( 'get_the_archive_title', array( $this, 'archive_titles' ));
        }

        public function enqueue() {
            if (isset($this->settings['styles'])) {
                foreach ($this->settings['styles'] as $style) {
                    call_user_func_array( 'wp_enqueue_style', $style);
                }
            }
            if (isset($this->settings['scripts'])) {
                foreach ($this->settings['scripts'] as $script) {
                    call_user_func_array( 'wp_enqueue_script', $script);
                }
            }
        }

        public function admin_styles() {
            if (isset($this->settings['admin_styles'])) {
                foreach ($this->settings['admin_styles'] as $style) {
                    call_user_func_array( 'add_editor_style', $style);
                }
            } 
        }

        public function theme_support() {
            if (isset($this->settings['theme_support'])) {
                foreach ($this->settings['theme_support'] as $support) {
                    call_user_func_array( 'add_theme_support', $support);
                }
            }
        }

       public function image_sizes() {
            if (isset($this->settings['image_sizes'])) {
                foreach ($this->settings['image_sizes'] as $size) {
                    call_user_func_array( 'add_image_size', $size);
                }
            }
        }

        public function content_width() {
            if ( ! isset( $GLOBALS['content_width'] ) && isset($this->settings['content_width']) ) {
                $GLOBALS['content_width'] = intval( $this->settings['content_width']);
            }
        }

        public function sidebars() {
            if (isset($this->settings['sidebars'])) {
                foreach ($this->settings['sidebars'] as $sidebar) {
                    register_sidebar($sidebar);
                }
            }
        }

        public function menus() {
            if (isset($this->settings['menus'])) {
                foreach ($this->settings['menus'] as $menu) {
                    call_user_func_array( 'register_nav_menu', $menu);
                }
            }
        }

        public function customizer( $wp_customize ) {
			if (isset($this->settings['customizer'])) {
				foreach ($this->settings['customizer'] as $setting => $customize) {
					if (isset($customize['remove_control'])) {
						$wp_customize->remove_control( $setting );
					}
					if(!$customize['remove_control']){
						if (isset($customize['add_panel'])) {
							$wp_customize->add_panel($setting, $customize['add_panel']);
						}
						if (isset($customize['add_section'])) {
							$wp_customize->add_section($setting, $customize['add_section']);
						}
						if (isset($customize['add_setting'])) {
							$wp_customize->add_setting($setting, $customize['add_setting']);
						}
						if (isset($customize['add_control'])) {
							if (isset($customize['add_control']['control'])) {
								$wp_customize->add_control(new $customize['add_control']['control']($wp_customize, $setting, $customize['add_control']['args']));
							} else {
								$wp_customize->add_control($setting, $customize['add_control']);
							}
						}
					}
				}
			}
			
		}

        public function responsive_video( $html, $url, $attr, $post_ID) {
            $output = '<div class="embed-responsive embed-responsive-16by9">' . $html . '</div>';
            return $output; 
        }
        
        public function archive_titles() {
			if ( is_category() ) {
				$title = single_cat_title( '', false );
			} elseif ( is_tag() ) {
				$title = single_tag_title( '#', false );
			} elseif ( is_author() ) {
				$title = 'Posts by <span class="vcard">' . get_the_author() . '</span>' ;
			} elseif ( is_year() ) {
				$title = get_the_date( _x( 'Y', 'yearly archives date format' ) );
			} elseif ( is_month() ) {
				$title = get_the_date( _x( 'F Y', 'monthly archives date format' ) );
			} elseif ( is_day() ) {
				$title = get_the_date( _x( 'F j, Y', 'daily archives date format' ) );
			}  elseif ( is_tax() ) {
				$title = single_term_title( '', false );
			} elseif  ( get_query_var('show_more_title', '' ) ) { // Post grid archive page
				$title = get_query_var('show_more_title', '' ); 
			} elseif ( is_post_type_archive() ) {
				$title = post_type_archive_title( '', false );
			} else {
				$title = __('Posts', 'botchan');
			}
			return ucfirst($title);
		}

        public function register_navwalker(){
            require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
        }
    }
    
?>