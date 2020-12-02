<?php
    /**
     * Botchan theme header
     *
     * @package botchan
     * @since 0.1
     */

  global $botchan;  
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
        <?php 
            if (get_theme_mod( 'custom_logo' )):
                the_custom_logo();
            else:
                bloginfo('name');
            endif;
        ?>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php $botchan->primary_menu(); ?>
        <?php get_search_form(); ?>
      </div>
    </nav>