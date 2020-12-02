
<?php
    /**
     * Botchan theme footer
     *
     * @package botchan
     * @since 0.1
     */
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
            <p>Botchan theme and contents &copy; Andrew Wright, <?php echo date('Y'); ?></p>
        </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
