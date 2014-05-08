<?php
/**
 * Custom functions
 */

function isTemplatePage(){

return false;
}

function placeHolder(){

echo '<h1>This is my Function output</h1>';

}

function custom_excerpt_length( $length ) {
	return 100;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



function display_Social_Icons(){
$path=get_template_directory_uri();

echo '<div>';
echo '<ul class="list-inline" id="socialRow">';
echo '<li><img src='.$path.'/assets/img/iglogo.png alt="Instagram Logo" class="img-responsive" width="30" height="30" /></li>';
echo '<li><img src="'.$path.'/assets/img/fblogo.png" alt=" Facebook Logo" class="img-responsive" width="30" height="30" /></li>';
echo '<li><img src="'.$path.'/assets/img/twitterlogo.png" alt=" Twitter Logo" class="img-responsive" width="30" height="30" /></li>';
echo '<li><img src="'.$path.'/assets/img/spotifylogo.png" alt=" Spotify Logo" class="img-responsive" width="30" height="30" /></li>';
echo '<li><img src="'.$path.'/assets/img/pinterestlogo.png" alt=" Pinterest Logo" class="img-responsive" width="30" height="30" /></li>';
echo '<li><img src="'.$path.'/assets/img/tumblrlogo.png" alt=" Tumblr Logo" class="img-responsive" width="30" height="30" /></li>';
echo '</ul>';
echo '</div>';

}


function my_wp_nav_menu_args( $args = '' ) {
	$args['container'] = false;
	return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );
