<?php
    /**
     * Botchan theme index
     *
     * @package botchan
     * @since 0.1
     */
?>
<?php get_header(); ?>
<?php
    while ( have_posts() ) : the_post();
        get_template_part('template-parts/page-content');
    endwhile;
?>
<?php get_footer(); ?>