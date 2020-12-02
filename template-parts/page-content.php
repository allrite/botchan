<?php
    /**
     * Botchan theme post template part
     *
     * @package botchan
     * @since 0.38
     */
    
    global $botchan;
?>
    <div class="jumbotron jumbotron-fluid jumbotron-heading" style="background: url('<?php the_post_thumbnail_url('botchan_jumbotron'); ?>') no-repeat center center fixed;-webkit-background-size: cover; -moz-background-size: cover; background-size: cover; -o-background-size: cover; height: 100vh;">
        <div class="container jumbotron-scrim">
            <h1 class="display-3 text-white"><?php the_title(); ?></h1>
            <p class="lead text-white">By <?php the_author_link(); ?> on <?php the_date(); ?></p>
            <hr class="my-4">
        </div>
    </div>
    <div class="container content-container">
        <?php the_content(); ?>
        <hr class="my-4">
        <?php $botchan->post_navigation(); ?>
        <?php $botchan->breadcrumbs(); ?>
        <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        ?>
    </div>