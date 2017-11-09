/**
 * Botchan scripts
 *
 * @package botchan
 * @since 0.2
 */

//$( "a" ).remove(".aesop-toggle-chapter-menu");
var aesopimg = $( ".aesop-image-component-image" ).find("img");

 aesopimg.addClass( "img-fluid" );
 aesopimg.removeAttr( "width" );
 aesopimg.removeAttr( "height" );