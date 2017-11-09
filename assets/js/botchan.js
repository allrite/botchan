/**
 * Botchan scripts
 *
 * @package botchan
 * @since 0.2
 */

$( "aesop-toggle-chapter-menu" ).remove();
var aesopimg = $( ".aesop-image-component-image" ).find("img");

 aesopimg.addClass( "img-fluid" );
 aesopimg.removeAttr( "width" );
 aesopimg.removeAttr( "height" );