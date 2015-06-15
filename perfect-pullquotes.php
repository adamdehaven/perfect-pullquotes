<?php
/*
Plugin Name: Perfect Pullquotes
Plugin URI:  http://adamdehaven.com/2015/05/easily-add-pullquotes-to-your-wordpress-posts-with-my-perfect-pullquotes-plugin/
Description: Add beautifully styled pullquotes to your Wordpress posts
Version:     1.4.1
Author:      Adam Dehaven
Author URI:  http://adamdehaven.com/
 */
add_action( 'wp_enqueue_scripts', 'adamdehaven_pullquote_styles' );
function adamdehaven_pullquote_styles()
{
    // Register the style like this for a plugin:
    wp_register_style( 'perfect-pullquotes-styles', plugins_url( '/perfect-pullquotes.css', __FILE__ ), array(), '1.1', 'all' ); 
    // For either a plugin or a theme, you can then enqueue the style:
    wp_enqueue_style( 'perfect-pullquotes-styles' );
}
add_shortcode( 'pullquote', 'adamdehaven_pullquote' );
function adamdehaven_pullquote( $atts, $content = null ) {
	$a = shortcode_atts( array(
        'align' => 'left', // Align pullquote to the left, right, or full (for width:100%). Default left.
        'color' => null, // Provide the HEX value of the border-color. Default #EEEEEE
        'class' => null, // Add additional classes to the div.pullquote object
        'cite'	=> null, // Add the name/source of the quote
        'link'	=> null, // Add a link to the cited source, must be http or https link
        ), $atts );

	// Pullquote alignment (left, right, or full)
	$alignment = '';
	switch ( $a['align'] ) {
        case 'full':
            $alignment = 'pullquote-align-full';
            break;
		case 'right':
			$alignment = 'pullquote-align-right';
			break;
		default:
			$alignment = 'pullquote-align-left';
			break;
	}

	// border-color: HEX value
	if ( isset($a['color']) && strlen($a['color']) > 1 && preg_match("/#([a-fA-F0-9]{3}){1,2}\b/",$a['color']) ):
        $color = ' style="border-color:'.$a['color'].' !important;"';
    else:
        $color = null;
    endif;

    // Check for cite
    if ( isset($a['cite']) && strlen($a['cite']) > 1 ):
    	$citeText = '<span itemprop="name fn">'.strip_tags( $a['cite'] ).'</span>';
    else:
    	$citeText = null;
    endif;

    // Check for link
    if ( isset($a['link']) && strlen($a['link']) > 1 && preg_match("/(http|https)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/", $a['link']) ):
        $citeLink = $a['link'];
        $citeAttribute = ' cite="'.$citeLink.'"';
    	$citeLinkWithText = '<a href="'.$a['link'].'" class="url" target="_blank" itemprop="url">'.$citeText.'</a>';
    else:
    	$citeLink = null;
        $citeAttribute = null;
        $citeLinkWithText = null;
    endif;

    // Create footer
    if ($citeLink && $citeText):
	    $citeFooter = '<footer itemscope itemtype="http://schema.org/Person"><cite>'.$citeLinkWithText.'</cite></footer>';
	elseif($citeText):
		$citeFooter = '<footer itemscope itemtype="http://schema.org/Person"><cite>'.$citeText.'</cite></footer>';
	else:
		$citeFooter = null;
	endif;

    return '<div class="pullquote vcard '.$alignment.' '.esc_attr($a['class']).'"'.$color.'><blockquote'.$citeAttribute.'><p>'.do_shortcode($content).'</p>'.$citeFooter.'</blockquote></div>';
}
add_action( 'init', 'adamdehaven_buttons' );
function adamdehaven_buttons() {
	add_filter("mce_external_plugins", "adamdehaven_add_buttons");
    add_filter('mce_buttons', 'adamdehaven_register_buttons');
}	
function adamdehaven_add_buttons($plugin_array) {
	$plugin_array['adamdehaven_perfect_pullquotes'] = plugins_url( '/perfect-pullquotes.js', __FILE__ );
	return $plugin_array;
}
function adamdehaven_register_buttons($buttons) {
	array_push( $buttons, 'pullquote-menu' );
	return $buttons;
}