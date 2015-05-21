Perfect Pullquotes

A Wordpress plugin to add left or right-aligned beautifully styled pullquotes. Also includes two custom buttons for the TinyMCE Editor as well as a custom shortcode.

INSTALLATION
Download the plugin and install the plugin via your Wordpress Dashboard. ( Plugins > Add New > Upload Plugin )

To change the default color of the pullquote’s border, edit lines 51 and 59 of the pullquote.css file by changing the HEX value of the border-color attribute, or simply utilize the “color” option included within the shortcode (details below).

Once installed, the plugin will add two Pullquote buttons to the Visual Editor (TinyMCE) within your Wordpress installation.

SHORTCODE
The plugin enables a Wordpress shortcode that allows you to add a pullquote within your content. The shortcode can be added manually or by selecting text in the text editor and then clicking either of the Pullquote buttons (one for left-aligned, the other for right-aligned).

The default shortcode tag is shown here
[pullquote align="left" color="" class=""]This is the pullquote text.[/pullquote]

OPTIONS
The shortcode includes three options, as outlined below.

"align": left or right - Determines whether pullquote is left or right aligned. Required. Example: [pullquote align="left"][/pullquote]

"color": HEX color code - Change the default border-color attribute by entering a valid HEX color, including the # (leading pound sign). Example:[pullquote align="left" color="#16989D"][/pullquote]

"class": text - Add class(es) to pullquote container. Optional. Example: [pullquote align ="right" class="cited author-quote"][/pullquote]