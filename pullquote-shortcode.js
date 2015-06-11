/* ======================================
 * https://github.com/adamdehaven/perfect-pullquotes
 * version 1.1.4
 *
 * Adam Dehaven ( @adamdehaven )
 * http://adamdehaven.com/
 *
 * pullquote-shortcode.js
 *
 * ======================================
*/
(function() {
    tinymce.create('tinymce.plugins.AdamDehavenPerfectPullquotes', {
        /**
         * Initializes the plugin, this will be executed after the plugin has been created.
         * This call is done before the editor instance has finished it's initialization so use the onInit event
         * of the editor instance to intercept that event.
         *
         * @param {tinymce.Editor} ed Editor instance that the plugin is initialized in.
         * @param {string} url Absolute URL to where the plugin is located.
         */
        init : function(ed, url) {
            // Left-Aligned Pullquote
            ed.addCommand('pullquote-left', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[pullquote align="left" color="" class="" cite="" link=""]' + selected_text.replace(/<\/?p[^>]*>/g, " ") + '[/pullquote]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            // Left-Aligned Pullquote Button
            ed.addButton('pullquote-left', {
                title : 'Add left-aligned pullquote',
                cmd : 'pullquote-left',
                image : url + '/pullquote-left.png'
            });
            // Right-Aligned Pullquote
            ed.addCommand('pullquote-right', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '[pullquote align="right" color="" class="" cite="" link=""]' + selected_text.replace(/<\/?p[^>]*>/g, " ") + '[/pullquote]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });
            // Right-Aligned Pullquote Button
            ed.addButton('pullquote-right', {
                title : 'Add right-aligned pullquote',
                cmd : 'pullquote-right',
                image : url + '/pullquote-right.png'
            });
        },

        /**
         * Creates control instances based in the incomming name. This method is normally not
         * needed since the addButton method of the tinymce.Editor class is a more easy way of adding buttons
         * but you sometimes need to create more complex controls like listboxes, split buttons etc then this
         * method can be used to create those.
         *
         * @param {String} n Name of the control to create.
         * @param {tinymce.ControlManager} cm Control manager to use inorder to create new control.
         * @return {tinymce.ui.Control} New control instance or null if no control was created.
         */
        createControl : function(n, cm) {
            return null;
        },

        /**
         * Returns information about the plugin as a name/value array.
         * The current keys are longname, author, authorurl, infourl and version.
         *
         * @return {Object} Name/value array containing information about the plugin.
         */
        getInfo : function() {
            return {
                    longname : 'Adam Dehaven Pullquote Shortcode',
                    author : 'Adam Dehaven',
                    authorurl : 'http://adamdehaven.com',
                    infourl : 'http://github.com/adamdehaven/perfect-pullquotes',
                    version : "1.0"
            };
        }
    });

    // Register plugin
    tinymce.PluginManager.add('adamdehaven_perfect_pullquotes', tinymce.plugins.AdamDehavenPerfectPullquotes);
})();