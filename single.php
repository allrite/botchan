<?php
    /**
     * Botchan theme index
     *
     * @package botchan
     * @since 0.1
     */
?>
<?php get_header(); ?>
<div class="container">
<?php
    while ( have_posts() ) : the_post();
        get_template_part('template-parts/post-content');
    endwhile;
?>
</div>
<?php get_footer(); ?>