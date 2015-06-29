# Perfect Pullquotes

A Wordpress plugin to add beautifully styled left-aligned, right-aligned, or full-width pullquotes. Includes a custom 'Pullquote' menu button for the TinyMCE Editor as well as a custom shortcode. View the always-current info post on [adamdehaven.com](http://adamdehaven.com/2015/05/easily-add-pullquotes-to-your-wordpress-theme-with-the-perfect-pullquotes-plugin/)

## INSTALLATION
[Download the plugin](https://github.com/adamdehaven/perfect-pullquotes/archive/master.zip). To change the default color of the pullquote’s border, edit lines <code>67</code>, <code>75</code>, and <code>83</code> of the <code>perfect-pullquotes.css</code> file by changing the HEX value of the <code>border-color</code> attribute. Alternatively, once the plugin is installed, you may utilize the “color” option included within the shortcode (details below). Upload the compressed <code>perfect-pullquotes.zip</code> plugin file via your Wordpress Dashboard.
<pre>Plugins > Add New > Upload Plugin</pre>

Once installed, the plugin will add a Pullquote dropdown button to the Visual Editor (as seen below) within your Wordpress installation as well as enable the `[pullquote]` shortcode. The actual positioning of the button in your installation may vary.

![Visual Editor preview with Pullquote buttons](screenshot-1.png)

## SHORTCODE
The plugin enables a [Wordpress shortcode](https://codex.wordpress.org/Shortcode_API) that allows you to add a pullquote within your content. The shortcode can be added manually or by selecting text in the text editor and then selecting an option (left, right, or full) from the Pullquote dropdown button.

The default shortcode tag is shown here
<pre>[pullquote align="left" cite="" link="" color="" class="" size=""]This is the pullquote text.[/pullquote]</pre>

## OPTIONS
The shortcode includes six options, as outlined below.

Option | Accepts | Description | Example
--- | --- | --- | ---
<code>align</code> | <code>left</code> <code>right</code> <code>full</code> | Determines whether pullquote is left-aligned, right-aligned, or full-width (95% width of container). **Required** | <code>[pullquote align="left"][/pullquote]</code>
<code>cite</code> | text | Cite your quotes back to their author/source. **Optional** | <code>[pullquote align ="right" cite="Jane Doe"][/pullquote]</code>
<code>link</code> | URL | Turn the cited author's name into a link that opens in a new window. Must be a valid URL beginning with http or https. **Optional** | <code>[pullquote align ="right" cite="Jane Doe" link="http://example.com"][/pullquote]</code>
<code>color</code> | [HEX](http://www.colorhexa.com/) color code | Change the default <code>border-color</code> attribute by entering a valid HEX color, including the <kbd>#</kbd> | <code>[pullquote align="left" color="#16989D"][/pullquote]</code>
<code>class</code> | text | Add class(es) to pullquote container. **Optional** | <code>[pullquote align ="right" class="cited author-quote"][/pullquote]</code>
<code>size</code> | integer | Change the size, in pixels, of the pullquote's text. **Optional** | <code>[pullquote align ="right" size="32"][/pullquote]</code>


## EXAMPLES

Below are a series of paragraphs (filler text) with pullquotes inserted:

![Sample pullquotes](screenshot-2.png)