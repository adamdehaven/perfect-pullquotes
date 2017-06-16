=== Perfect Pullquotes ===
Contributors: adamdehaven
Donate link: http://adamdehaven.com/blog/2015/05/easily-add-pullquotes-to-your-wordpress-posts-with-my-perfect-pullquotes-plugin/
Tags: pullquotes, pullquote, pull quotes, pull quote, quotes, quote, blockquotes, blockquote
Requires at least: 3.0.1
Tested up to: 4.8
Stable tag: 1.7.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add beautifully styled left-aligned, right-aligned, or full-width pullquotes to your Wordpress posts.

== Description ==
Add beautifully styled left-aligned, right-aligned, or full-width pullquotes. Includes a custom 'Pullquote' menu button for the TinyMCE Editor as well as a custom shortcode. View the always-current info post on [adamdehaven.com](http://adamdehaven.com/blog/2015/05/easily-add-pullquotes-to-your-wordpress-theme-with-the-perfect-pullquotes-plugin/)

The plugin enables a Wordpress shortcode that allows you to add a pullquote within your content. The shortcode can be added manually or by selecting text in the text editor and then selecting an option (left, right, or full) from the Pullquote dropdown button.

The default shortcode tag is shown here
<pre>[perfectpullquote align="left" class="" cite="" link="" color=""]This is the pullquote text.[/perfectpullquote]</pre>

= Options =
The shortcode includes six options, (align, color, and class) as outlined below:

= align="left" =
**REQUIRED**: Determines whether pullquote is left-aligned, right-aligned, or full-width (95% width of container). Accepts "left", "right", or "full"
<pre>[perfectpullquote align="left"][/perfectpullquote]</pre>

= cite="Jane Doe" =
**Optional**: Cite your quotes back to their author/source
<pre>[perfectpullquote align ="right" cite="Jane Doe"][/perfectpullquote]</pre>

= link="http://example.com" =
**Optional**: Turn the cited author's name into a link that opens in a new window. Must be a valid URL beginning with `http` or `https`
<pre>[perfectpullquote align ="right" cite="Jane Doe" link="http://example.com"][/perfectpullquote]</pre>

= color="#EEEEEE" =
**Optional**: Change the default `border-color` attribute by entering a valid HEX color, including the pound ( # ) sign.
<pre>[perfectpullquote align="left" color="#16989D"][/perfectpullquote]</pre>

= class="className" =
**Optional**: Add class(es) to pullquote container.
<pre>[perfectpullquote align ="right" class="firstClass secondClass"][/perfectpullquote]</pre>

= size="21" =
**Optional**: Change the font size of the pullquote's text, in pixels.
<pre>[perfectpullquote align ="right" size="32"][/perfectpullquote]</pre>

== Installation ==

Download the plugin from Wordpress or [GitHub](https://github.com/adamdehaven/perfect-pullquotes/archive/master.zip). To change the default color of the pullquote’s border before installing, edit lines `71`, `79`, and `87` of the `perfect-pullquotes.css` file by changing the HEX value of the `border-color` attribute. Alternatively, once the plugin is installed, you may utilize the “color” option included within the shortcode.

1. Upload the compressed `perfect-pullquotes.zip` plugin file via your Wordpress Dashboard: `Plugins > Add New > Upload Plugin`, or to the `/wp-content/plugins/` directory within your Wordpress installation on your server.
2. Activate the plugin through the 'Plugins' menu in WordPress

Once installed, the plugin will add a Pullquote dropdown button to the Visual Editor (as seen below) within your Wordpress installation as well as enable the `[perfectpullquote]` shortcode.

== Frequently Asked Questions ==

= Are all of the shortcode option attributes required? =

No. Only the `align` option attribute is required. All other attributes may be deleted if unsued. For example:
<pre>[perfectpullquote align="left"]Text[/perfectpullquote]</pre>

= How can I change the color of the pullquote's border? =

To change the default color of the pullquote’s border, before uploading the plugin, edit lines `67`, `75`, and `83` of the `perfect-pullquotes.css` file by changing the HEX value of the `border-color` attribute. Alternatively, once the plugin is installed, you may utilize the “color” option included within the shortcode.

= How can I add additional classes to the pullquote's container? =

Simply utilize the "class" option on the shortcode tag.
<pre>[perfectpullquote align="left" class="firstClass secondClass"]Text[/perfectpullquote]</pre>

= How can I change the font size of the text? =

Simply utilize the "size" option on the shortcode tag by entering the one or two-digit size, in pixels.
<pre>[perfectpullquote align="left" size="32"]Text[/perfectpullquote]</pre>

= How can I add a cite to the quote? =

Simply utilize the "cite" option on the shortcode tag.
<pre>[perfectpullquote align="left" cite="Author Name"]Text[/perfectpullquote]</pre>

= Can I link to the cited author's website, online works, etc.? =

Simply utilize the "cite" and "link" options on the shortcode tag. Both options must be present in order to generate a working link.
<pre>[perfectpullquote align="left" cite="Author Name" link="http://example.com"]Text[/perfectpullquote]</pre>

= I updated the plugin, but now my pullquotes look weird. Help? =

After updating the plugin, you may see "ugly" pullquotes until you clear the cache in your browser and load the new CSS files from the plugin. Server cache time may vary. If the pullquotes continue to look "broken," simply clear your web brower's cache and refresh the page.

== Screenshots ==

1. This screenshot shows the 'Pullquote' button that will be added to the Visual Editor once installed. The button can be used to insert a left-aligned, right-aligned, or full-width pullquote, accordingly. The actual positioning of the button in your installation may vary.
2. An example of a left-aligned and right-aligned pullquote. Your pullquotes will vary depending on your font settings, color choices, etc.

== Changelog ==

= 1.7.3 =
* Adds a CSS reset for `blockquote p:before` and `blockquote p:after` psuedo elements to prevent theme overrides.

= 1.7.2 =
* Resolves an error with generated Structured Data validation. (Thanks to @sarahsmithers for the head's up!)

= 1.7.1 =
* MAJOR UPDATE: Changes shortcode FROM [pullquote] TO [perfectpullquote]. Shortcodes in all existing posts will need to be updated to [perfectpullquote]. See http://adamdehaven.com/blog/2015/05/easily-add-pullquotes-to-your-wordpress-posts-with-my-perfect-pullquotes-plugin/ for more information
* Bug fixes

= 1.7 =
* MAJOR UPDATE: Changes shortcode FROM [pullquote] TO [perfectpullquote]. Shortcodes in all existing posts will need to be updated to [perfectpullquote]. See http://adamdehaven.com/blog/2015/05/easily-add-pullquotes-to-your-wordpress-posts-with-my-perfect-pullquotes-plugin/ for more information

= 1.6.3 =
* Compatibility updates for Wordpress 4.5.1

= 1.6.2 =
* Fixes issue with "size" attribute.

= 1.6.1 =
* Minor update for Wordpress 4.3.1.

= 1.6 =
* Adds support for optional "size" attribute whereby user can designate font-size in pixels.
* Changes border to left side when screen width is less than 768px, regardless of alignment.

= 1.5 =
* Changed <code>.pullquote</code> class to <code>.perfect-pullquote</code> to alleviate conflicting CSS issues per user requests.

= 1.4.1 =
* Small CSS fix.

= 1.4 =
* Fixes issue where empty `cite=""` attribute causes an empty footer element.
* Properly spaces pullquote without corrupting surrounding paragraph `<p>` tags.
* Replaces 2 separate pullquote buttons in editor with one menu button dropdown allowing the selection of adding a left-aligned, right-aligned, or full-width pullquote.

= 1.1.4 =
* Added schema.org tags and microformats.org tags

= 1.1.3 =
* CSS fix for full-width quote.

= 1.1.2 =
* Adds support for full-width <code>width:95%</code> quotes. Utilize by specifying align="full" on shortcode. Update to docs and plugin URL.

= 1.1.1 =
* Adds support for full-width <code>width:95%</code> quotes. Utilize by specifying align="full" on shortcode.

= 1.1 =
* Fixes "Plugin does not have a valid header" error.

= 1.0.2 =
* Added support for optionally citing the quote's author within a `<footer/><cite/>` block, as well as adding a link to the author.

= 1.0.1 =
* Minor update for performance improvements.

= 1.0 =
* Initial release.

== Upgrade Notice ==

= 1.6 =
Update to fix border attribute.

= 1.5 =
Update to resolve common CSS issues.

= 1.4.1 =
Update adds spacing between quote and source.

= 1.4 =
Update now for an enhanced Pullquote button, to resolve the invalid header notice, and to correct pullquote spacing.

= 1.0.1 =
Minor update for performance improvements.

== Upgrade Notice ==

= 1.7.3 =
Adds a CSS reset for `blockquote p:before` and `blockquote p:after` psuedo elements to prevent theme overrides.

= 1.7.2 =
Resolves an error with generated Structured Data validation. (Thanks to @sarahsmithers for the head's up!)

= 1.7.1 =
MAJOR UPDATE: Changes shortcode FROM [pullquote] TO [perfectpullquote]. Shortcodes in all existing posts will need to be updated to [perfectpullquote]. See http://adamdehaven.com/blog/2015/05/easily-add-pullquotes-to-your-wordpress-posts-with-my-perfect-pullquotes-plugin/ for more information

= 1.7 =
MAJOR UPDATE: Changes shortcode FROM [pullquote] TO [perfectpullquote]. Shortcodes in all existing posts will need to be updated to [perfectpullquote]. See http://adamdehaven.com/blog/2015/05/easily-add-pullquotes-to-your-wordpress-posts-with-my-perfect-pullquotes-plugin/ for more information
