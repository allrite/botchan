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
            $this->image_sizes();
            $this->content_width();
        }

        private function setup_actions() {
            add_action( 'wp_enqueue_scripts', array($this, 'enqueue') );
            add_action( 'admin_init', array($this, 'admin_styles') );
            add_action( 'widgets_init', array($this, 'sidebars') );
            add_action( 'init', array($this, 'menus') );        
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

    }
    
?>