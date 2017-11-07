<?php
    /**
     * Botchan theme archive
     *
     * @package botchan
     * @since 0.1
     */
?>
<?php get_header(); ?>
    <div class="container">
        <?php if ( have_posts() ): ?>
        <?php the_archive_title( '<h1>', '</h1>'); ?>
        <?php the_archive_description( '<p class="lead">', '</p>' ); ?>
        <?php 
            while ( have_posts() ) : the_post();
                get_template_part('template-parts/post-card');
            endwhile;
        ?>
        <?php else: ?>
        <p>No posts found.</p>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>