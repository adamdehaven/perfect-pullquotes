# Perfect Pullquotes

A Wordpress plugin to add left or right-aligned beautifully styled pullquotes. Also includes two custom buttons for the TinyMCE Editor as well as a custom shortcode. View the always-current post on [adamdehaven.com](http://adamdehaven.com/2015/05/easily-add-pullquotes-to-your-wordpress-theme-with-the-perfect-pullquotes-plugin/)

## INSTALLATION
[Download the plugin](https://github.com/adamdehaven/perfect-pullquotes/archive/master.zip). To change the default color of the pullquote’s border, edit lines <code>51</code> and <code>59</code> of the <code>pullquote.css</code> file by changing the HEX value of the <code>border-color</code> attribute. Alternatively, once the plugin is installed, you may utilize the “color” option included within the shortcode (details below). Upload the compressed <code>perfect-pullquotes.zip</code> plugin file via your Wordpress Dashboard.
<pre>Plugins > Add New > Upload Plugin</pre>

Once installed, the plugin will add two Pullquote buttons to the Visual Editor (TinyMCE) within your Wordpress installation as seen below

![Visual Editor preview with Pullquote buttons](editor-screenshot.png)

## SHORTCODE
The plugin enables a [Wordpress shortcode](https://codex.wordpress.org/Shortcode_API) that allows you to add a pullquote within your content. The shortcode can be added manually or by selecting text in the text editor and then clicking either of the Pullquote buttons (one for left-aligned, the other for right-aligned).

The default shortcode tag is shown here
<pre>[pullquote align="left" color="" class=""]This is the pullquote text.[/pullquote]</pre>

## OPTIONS
The shortcode includes three options, as outlined below.

Option | Accepts | Description | Example
--- | --- | --- | ---
<code>align</code> | <code>left</code> or <code>right</code> | Determines whether pullquote is left or right aligned. **Required** | <code>[pullquote align="left"][/pullquote]</code>
<code>color</code> | [HEX](http://www.colorhexa.com/) color code | Change the default <code>border-color</code> attribute by entering a valid HEX color, including the <kbd>#</kbd> | <code>[pullquote align="left" color="#16989D"][/pullquote]</code>
<code>class</code> | text | Add class(es) to pullquote container. **Optional** | <code>[pullquote align ="right" class="cited author-quote"][/pullquote]</code>

## EXAMPLES

Below are a series of paragraphs (filler text) with pullquotes inserted:

![Sample pullquotes](pullquote-examples.png)