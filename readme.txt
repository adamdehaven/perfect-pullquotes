=== Perfect Pullquotes ===
Contributors: adamdehaven
Donate link: http://adamdehaven.com/
Tags: pullquotes, pullquote, pull quotes, pull quote, quotes, quote, blockquotes, blockquote
Requires at least: 3.0.1
Tested up to: 4.2.2
Stable tag: 1.0.2
License: GPLv2 or later
License URI: https://github.com/adamdehaven/perfect-pullquotes/blob/master/LICENSE

Add left or right-aligned, beautifully styled pullquotes. Includes two custom buttons for the Visual Editor as well as a custom shortcode.

== Description ==
Add left or right-aligned, beautifully styled pullquotes. Includes two custom buttons for the Visual Editor as well as a custom shortcode.

The plugin enables a [Wordpress shortcode](https://codex.wordpress.org/Shortcode_API) that allows you to add a pullquote within your content. The shortcode can be added manually or by selecting text in the text editor and then clicking either of the Pullquote buttons (one for left-aligned, the other for right-aligned).

The default shortcode tag is shown here
<pre>[pullquote align="left" color="" class="" cite="" link=""]This is the pullquote text.[/pullquote]</pre>

= Options =
The shortcode includes three options, (align, color, and class) as outlined below:

= align="left" =
**REQUIRED**: Determines whether pullquote is left or right aligned. Accepts "left" or "right"
`[pullquote align="left"][/pullquote]`  

= color="#EEEEEE" =
**Optional**: Change the default `border-color` attribute by entering a valid HEX color, including the pound ( # ) sign.
`[pullquote align="left" color="#16989D"][/pullquote]`  

= class="className" =
**Optional**: Add class(es) to pullquote container.
`[pullquote align ="right" class="firstClass secondClass"][/pullquote]`

= cite="Jane Doe" =
**Optional**: Cite your quotes back to their author/originator
`[pullquote align ="right" cite="Jane Doe"][/pullquote]`

= link="http://example.com" =
**Optional**: Turn the cited author's name into a link that opens in a new window. Must begin with `http` or `https`
`[pullquote align ="right" cite="Jane Doe" link="http://example.com"][/pullquote]`

== Installation ==

Download the plugin from Wordpress or [GitHub](https://github.com/adamdehaven/perfect-pullquotes/archive/master.zip). To change the default color of the pullquote’s border before installing, edit lines `51` and `59` of the `pullquote.css` file by changing the HEX value of the `border-color` attribute. Alternatively, once the plugin is installed, you may utilize the “color” option included within the shortcode. 

1. Upload the compressed `perfect-pullquotes.zip` plugin file via your Wordpress Dashboard: `Plugins > Add New > Upload Plugin`, or to the `/wp-content/plugins/` directory within your Wordpress installation on your server.
2. Activate the plugin through the 'Plugins' menu in WordPress

Once installed, the plugin will add two Pullquote buttons to the Visual Editor (TinyMCE) within your Wordpress installation as well as enable the `[pullquote/]` shortcode.

== Frequently Asked Questions ==

= How can I change the color of the pullquote's border? =

To change the default color of the pullquote’s border, before uploading the plugin, edit lines `51` and `59` of the `pullquote.css` file by changing the HEX value of the `border-color` attribute. Alternatively, once the plugin is installed, you may utilize the “color” option included within the shortcode.

= How can I add additional classes to the pullquote's container? =

Simply utilize the "class" option on the shortcode tag. `[pullquote align="left" class="firstClass secondClass"]Text[/pullquote]`

= How can I add a cite to the quote? =

Simply utilize the "cite" option on the shortcode tag. `[pullquote align="left" cite="Author Name"]Text[/pullquote]`

= Can I link to the cited author's website, online works, etc.? =

Simply utilize the "cite" and "link" options on the shortcode tag. Both options must be present in order to generate a working link `[pullquote align="left" cite="Author Name" link="http://example.com"]Text[/pullquote]`

== Screenshots ==

1. This screenshot shows the two buttons that will be added to the Visual Editor once installed. The two buttons can be used to insert a left-aligned or right-aligned pullquote, accordingly. The actual positioning of the buttons in your installation may vary.
2. An example of a left-aligned and right-aligned pullquote. Your pullquotes will vary depending on your font settings, color choices, etc.

== Changelog ==

= 1.0.2 =
* Added support for optionally citing the quote's author within a `<footer/><cite/>` block, as well as adding a link to the author.

= 1.0.1 =
* Minor update for performance improvements.

= 1.0 =
* Initial release.

== Upgrade Notice ==

= 1.0.1 =
Minor update for performance improvements.