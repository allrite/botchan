<?php
    /**
     * Botchan theme post template part
     *
     * @package botchan
     * @since 0.1
     */
?>
    <div class="jumbotron jumbotron-post" style="background: url('<?php the_post_thumbnail_url('botchan_post_heading'); ?>') no-repeat center center;">
        <div class="container">
            <h1 class="display-3 text-white"><?php the_title(); ?></h1>
            <p class="lead text-white">By <?php the_author_link(); ?> on <?php the_date(); ?></p>
        </div>
    </div>
    <div class="container">
        <?php the_content(); ?>
        <hr class="my-4">
        <?php
            if(get_the_tag_list()) {
                echo get_the_tag_list('<ul class="tags"><li>#','</li><li>#','</li></ul>');
            }
        ?>
    </div>