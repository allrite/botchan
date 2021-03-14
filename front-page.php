<?php
    /**
     * Botchan theme index
     *
     * @package botchan
     * @since 0.1
     */
    global $botchan;
?>
<?php get_header(); ?>
    <div class="jumbotron jumbotron-fluid jumbotron-heading text-white" style="background: url('<?php header_image(); ?>') no-repeat center center fixed;-webkit-background-size: cover; -moz-background-size: cover; background-size: cover; -o-background-size: cover; height: 100vh;">
        <div class="container jumbotron-scrim">
            <h1 class="display-3"><?php bloginfo('name'); ?></h1>
            <p class="lead"><?php bloginfo('description'); ?></p>        
        </div>
    </div>
    <div class="container content-container">
    <?php
        if ( is_home() ):
            if (have_posts()):
                while ( have_posts() ) : the_post();
                    get_template_part('template-parts/post-card');
                endwhile;
                $botchan->pagination();
            else: 
    ?> 
            <p>No posts found.</p>
    <?php   endif; 
        else: 
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
            
        endif;
    ?>
    </div>
<?php get_footer(); ?>