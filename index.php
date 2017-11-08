<?php
    /**
     * Botchan theme index
     *
     * @package botchan
     * @since 0.1
     */
?>
<?php get_header(); ?>
    <div class="jumbotron jumbotron-fluid jumbotron-heading text-white" style="background: url('<?php header_image(); ?>') no-repeat center center fixed;-webkit-background-size: cover; -moz-background-size: cover; background-size: cover; -o-background-size: cover; height: 100vh;">
        <div class="container">
            <h1 class="display-3"><?php bloginfo('name'); ?></h1>
            <p class="lead"><?php bloginfo('description'); ?></p>
            <div class="mx-auto" style="width: 200px;">
                <a href="#posts"><button type="button" class="btn btn-outline-light">Go to the stories</button></a>
            </div>
        
        </div>
    </div>
    <div id="posts" class="container content-container">
        <h2>Latest posts</h2>
        <?php 
            if (have_posts()):
                while ( have_posts() ) : the_post();
                    get_template_part('template-parts/post-card');
                endwhile;
            else: 
        ?> 
            <p>No posts found.</p>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>