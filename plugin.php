<?php
/*
Plugin Name: Perfect Pullquotes
Plugin URI:  http://adamdehaven.com/2015/05/easily-add-pullquotes-to-your-wordpress-posts-with-my-perfect-pullquotes-plugin/
Description: A Wordpress plugin to add beautifully styled left-aligned, right-aligned, or full-width pullquotes. Also includes two custom buttons for the TinyMCE Editor as well as a custom shortcode.
Version:     1.1.4
Author:      Adam Dehaven
Author URI:  http://adamdehaven.com
License:     GPL2

Perfect Pullquotes is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Perfect Pullquotes is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Perfect Pullquotes. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

add_action( 'wp_enqueue_scripts', 'adamdehaven_pullquote_styles' );
function adamdehaven_pullquote_styles()
{
    // Register the style like this for a plugin:
    wp_register_style( 'perfect-pullquotes-styles', plugins_url( '/pullquote.css', __FILE__ ), array(), '1.1', 'all' ); 
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
	if ( isset($a['color']) && preg_match("/#([a-fA-F0-9]{3}){1,2}\b/",$a['color']) ):
        $color = ' style="border-color:'.$a['color'].' !important;"';
    else:
        $color = null;
    endif;

    // Check for cite
    if ( isset($a['cite']) ):
    	$citeText = '<span itemprop="name fn">'.strip_tags( $a['cite'] ).'</span>';
    else:
    	$citeText = null;
    endif;

    // Check for link
    if ( isset($a['link']) && preg_match("/(http|https)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/", $a['link']) ):
        $citeLink = $a['link'];
    	$citeLinkWithText = '<a href="'.$a['link'].'" class="url" target="_blank" itemprop="url">'.$citeText.'</a>';
    else:
    	$citeLink = null;
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

    return '<div class="pullquote '.$alignment.' '.esc_attr($a['class']).' vcard"'.$color.'><blockquote cite="'.$citeLink.'"><p>'.do_shortcode($content).'</p>'.$citeFooter.'</blockquote></div>';
}

add_action( 'init', 'adamdehaven_buttons' );
function adamdehaven_buttons() {
	add_filter("mce_external_plugins", "adamdehaven_add_buttons");
    add_filter('mce_buttons', 'adamdehaven_register_buttons');
}	
function adamdehaven_add_buttons($plugin_array) {
	$plugin_array['adamdehaven_perfect_pullquotes'] = plugins_url( '/pullquote-shortcode.js', __FILE__ );
	return $plugin_array;
}
function adamdehaven_register_buttons($buttons) {
	array_push( $buttons, 'pullquote-left', 'pullquote-right' );
	return $buttons;
}