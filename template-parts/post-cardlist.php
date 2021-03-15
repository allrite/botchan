<?php
    /**
     * Botchan theme post card template part
     *
     * @package botchan
     * @since 0.1
     */
?>
    <a href="<?php the_permalink(); ?>" class="text-dark">
    <div class="card mb-3">
        <div class="card-body">
            <h4 class="card-title"><?php the_title(); ?></h4>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <p class="text-muted"><?php the_date(); ?></p>
            <?php
                if(get_the_tag_list()) {
                    echo get_the_tag_list('<ul class="card-text tags"><li><small class="text-muted">#','</small></li><li><small class="text-muted">#','</small></li></ul>');
                }
            ?>
        </div>
    </div>
    </a>