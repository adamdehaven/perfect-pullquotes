=== Perfect Pullquotes ===
Contributors: abdehaven@gmail.com
Donate link: http://adamdehaven.com/
Tags: pullquotes, pullquote, pull quotes, pull quote, quotes, quote, blockquotes, blockquote
Requires at least: 3.0.1
Tested up to: 4.2.2
Stable tag: 1.0
License: GPLv2 or later
License URI: https://github.com/adamdehaven/perfect-pullquotes/blob/master/LICENSE

Add left or right-aligned, beautifully styled pullquotes. Includes two custom buttons for the Visual Editor as well as a custom shortcode.

== Description ==
Add left or right-aligned, beautifully styled pullquotes. Includes two custom buttons for the Visual Editor as well as a custom shortcode.

The plugin enables a [Wordpress shortcode](https://codex.wordpress.org/Shortcode_API) that allows you to add a pullquote within your content. The shortcode can be added manually or by selecting text in the text editor and then clicking either of the Pullquote buttons (one for left-aligned, the other for right-aligned).

The default shortcode tag is shown here
<pre>[pullquote align="left" color="" class=""]This is the pullquote text.[/pullquote]</pre>

= Options =
The shortcode includes three options, as outlined below.

Option | Accepts | Description | Example
--- | --- | --- | ---
<code>align</code> | <code>left</code> or <code>right</code> | Determines whether pullquote is left or right aligned. **Required** | <code>[pullquote align="left"][/pullquote]</code>
<code>color</code> | [HEX](http://www.colorhexa.com/) color code | Change the default <code>border-color</code> attribute by entering a valid HEX color, including the <kbd>#</kbd> | <code>[pullquote align="left" color="#16989D"][/pullquote]</code>
<code>class</code> | text | Add class(es) to pullquote container. **Optional** | <code>[pullquote align ="right" class="cited author-quote"][/pullquote]</code>

= Examples =

Below are a series of paragraphs (filler text) with pullquotes inserted:

![Sample pullquotes](/assets/pullquote-examples.png)

== Installation ==

Download the plugin from Wordpress or [GitHub](https://github.com/adamdehaven/perfect-pullquotes/archive/master.zip). To change the default color of the pullquote’s border, edit lines <code>51</code> and <code>59</code> of the <code>pullquote.css</code> file by changing the HEX value of the <code>border-color</code> attribute. Alternatively, once the plugin is installed, you may utilize the “color” option included within the shortcode (details below). 

1. Upload the compressed <code>perfect-pullquotes.zip</code> plugin file via your Wordpress Dashboard: <code>Plugins > Add New > Upload Plugin</code>, or to the `/wp-content/plugins/` directory within your Wordpress installation on your server.
2. Activate the plugin through the 'Plugins' menu in WordPress

Once installed, the plugin will add two Pullquote buttons to the Visual Editor (TinyMCE) within your Wordpress installation.

== Frequently Asked Questions ==

= How can I change the color of the pullquote's border? =

To change the default color of the pullquote’s border, before uploading the plugin, edit lines <code>51</code> and <code>59</code> of the <code>pullquote.css</code> file by changing the HEX value of the <code>border-color</code> attribute. Alternatively, once the plugin is installed, you may utilize the “color” option included within the shortcode.

== Screenshots ==

1. This screenshot shows the two buttons that will be added to the Visual Editor once installed. The two buttons can be used to insert a left-aligned or right-aligned pullquote, accordingly. The actual positioning of the buttons in your installation may vary.
2. An example of a left-aligned and right-aligned pullquote. Your pullquotes will vary depending on your font settings, color choices, etc.

== Changelog ==

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.0 =
Initial release.