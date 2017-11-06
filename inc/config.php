<?php
    /**
     * Botchan configuration
     *
     * @package botchan
     * @since 0.1
     */

    class Botchan_Config {
        
        public $styles = array();
        public $scripts = array();
        public $actions = array();
        public $theme_support = array();
        public $image_sizes = array();
        public $content_width = false;
        
        public function __construct() {
            $this->setup_actions();
        }

        private function setup_actions() {
            add_action( 'wp_enqueue_scripts', array($this, 'enqueue'));
        }

        private function enqueue() {
            if (isset($this->$styles)) {
                foreach ($this->styles as $style) {
                    call_user_func_array( 'wp_enqueue_style', $style);
                }
            }
            if (isset($this->$scripts)) {
                foreach ($this->scripts as $script) {
                    call_user_func_array( 'wp_enqueue_script', $script);
                }
            }
        }

    }
    
?>