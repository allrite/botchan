<?php
    /**
     * Botchan theme search form
     *
     * @package botchan
     * @since 0.1
     */
?>

        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" name="s" ctype="search" placeholder="Search" aria-label="Search" value="<?php echo get_search_query(); ?>">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>