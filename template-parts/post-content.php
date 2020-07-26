<?php
    /**
     * Botchan theme post template part
     *
     * @package botchan
     * @since 0.1
     */
?>
    <div class="jumbotron jumbotron-fluid jumbotron-heading" style="background: url('<?php the_post_thumbnail_url('botchan_jumbotron'); ?>') no-repeat center center fixed;-webkit-background-size: cover; -moz-background-size: cover; background-size: cover; -o-background-size: cover; height: 100vh;">
        <div class="container jumbotron-scrim">
            <h1 class="display-3 text-white"><?php the_title(); ?></h1>
            <p class="lead text-white">By <?php the_author_link(); ?> on <?php the_date(); ?></p>
            <hr class="my-4">
            <p class="text-white">Posted in: <?php echo get_the_category_list(', '); ?></p>
        </div>
    </div>
    <div class="container content-container">
        <?php the_content(); ?>
        <hr class="my-4">
        <?php
            if(get_the_tag_list()) {
                echo get_the_tag_list('<ul class="tags">Tagged: <li>','</li><li>','</li></ul>');
            }
        ?>
        <?php Botchan::post_navigation(); ?>
        <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        ?>
    </div>