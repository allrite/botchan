<?php
    /**
     * Botchan theme archive
     *
     * @package botchan
     * @since 0.1
     */
?>
<?php get_header(); ?>
    <div class="container content-container">
        <h1>Search results</h1>
        <?php get_search_form(); ?>
        <div class="postlist-container">
            <?php if ( have_posts() ): ?>
            <?php 
                while ( have_posts() ) : the_post();
                    get_template_part('template-parts/post-cardlist');
                endwhile;
            ?>
            <?php else: ?>
            <p>No results found.</p>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>