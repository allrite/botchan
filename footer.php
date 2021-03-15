
<?php
    /**
     * Botchan theme footer
     *
     * @package botchan
     * @since 0.1
     */

     global $botchan;
?>
    <div id="footer-widgets-area" class="container-fluid bg-dark text-white">
        <div class="row">
            <div class="col-sm">
            <?php 
                if ( is_active_sidebar( 'footer-1' ) ) : 
                    dynamic_sidebar( 'footer-1' );
                endif;
            ?>
            </div>
            <div class="col-sm">
            <?php 
                if ( is_active_sidebar( 'footer-2' ) ) : 
                    dynamic_sidebar( 'footer-2' );
                endif;
            ?>
            </div>
            <div class="col-sm">
            <?php 
                if ( is_active_sidebar( 'footer-3' ) ) : 
                    dynamic_sidebar( 'footer-3' );
                endif;
            ?>
            </div>
        </div>
    </div>
    <footer class="container-fluid footer bg-dark text-white">
        <div id="footer-copyright-area" class="container ">
            <p><?php echo $botchan->footer_text(); ?></p>
        </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
