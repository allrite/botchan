<?php
    /**
     * Botchan helper classes
     *
     * @package botchan
     * @since 0.1
     */

    /**
     * Nav walker for Bootstrap
     * Deprecated in favour of https://github.com/wp-bootstrap/wp-bootstrap-navwalker
     */ 

    class Botchan_Menu_Walker extends Walker_Nav_Menu {
        public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {		
            $active = in_array("current_page_item",$item->classes) ? ' active' : '';
            $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';	
            $output .= $indent . '<li class="nav-item' . $active . '">';
            $output .= "<a class=\"nav-link\" href=\"" . $item->url . "\">"  .$icon_string . esc_attr($item->title);
            if ( $active ) {
                $output .= ' <span class="sr-only">(current)</span>';
            }
            $output .= "</a>\n";
		}
    }
    class Botchan {
        public function __construct() {
            
        }

        public function primary_menu() {
            $defaults =   array(
                'theme_location'  => 'primary',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'bs-example-navbar-collapse-1',
                'menu_class'      => 'navbar-nav mr-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            );
            wp_nav_menu($defaults);
        }

        public function pagination(&$query = false) {
            if (!$query) {
                global $wp_query;
                $query = &$wp_query;
            }
            $big = 999999999; // need an unlikely integer
            
            
            $pages =  paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $query->max_num_pages,
                        'prev_text'          => __('&laquo;', 'botchan'),
                        'next_text'          => __('&raquo;', 'botchan'),
                        'type'  => 'array'
                    ) );
            
            if( is_array( $pages ) ) {
                $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
                echo '<nav aria-label="Page navigation">';
                echo '<ul class="pagination justify-content-center">';
                foreach ( $pages as $page ) {
                        echo '<li class="page-item">' . $page . "</li>\n";
                }
                echo '</ul></nav>';
            }
        }

        public function post_navigation() {
        ?>
            <div class="row">
            <div class="col text-left">
                <?php previous_post_link(); ?>
            </div>
            <div class="col text-right">
                <?php next_post_link(); ?>
             </div>
        </div>
        <?php
        }

        public function breadcrumbs() {
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
        }

        public function footer_text( $tags = false ) {
			$copyright = get_theme_mod('footer_text');
			if ($copyright) {
				$copyright = str_replace(array( '#year#', '#name#' ), array( date('Y'), get_bloginfo('name') ), $copyright );
			} else {
				$copyright = '© Copyright ' . get_bloginfo('name') . ' ' . date('Y');
			}
			echo $copyright; // Sets tags to true if any html is used in the copyright.
		}

    }
?>