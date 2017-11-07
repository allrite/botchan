<?php
    /**
     * Botchan helper classes
     *
     * @package botchan
     * @since 0.1
     */

    // Nav walker for Bootstrap

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
                'menu'              =>  'primary',
                'theme_location'    =>  'primary',
                'depth'             =>  1,
                'menu_class'        =>  'navbar-nav mr-auto',
                'container'         =>  false,
                'walker'            =>  new Botchan_Menu_Walker()
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
                        'prev_text'          => __('&#9668;', 'botchan'),
                        'next_text'          => __('&#9658;', 'botchan'),
                    ) );
            
            if( is_array( $pages ) ) {
                $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
                echo '<nav aria-label="Page navigation example">';
                echo '<ul class="pagination">';
                foreach ( $pages as $page ) {
                        echo '<li class="page-item">' . $page . "</li>\n";
                }
                echo '</ul></nav>';
            }
        }

    }
?>