
=== Stylist – Customize Design, Style, and Custom CSS  ===
Tags: customize, gutenberg blocks, style, custom css, design
Requires at least: 4.7
Tested up to: 4.9
Stable tag: 0.2.3
Contributors: StylistWP
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

🎨 Visually customize ANY page element ⭐ in ANY page builder: ✅ Gutenberg Blocks, ✅ Elementor, ✅ Beaver Builder 🎛 Custom CSS style editor

== Description ==
= Simple yet powerful visual style editor for your website =

A simple to use website style editor for your **Gutenberg blocks** or any other page builder elements. Style your website designs in real-time right in your browser without coding. Stylist provides you design panel with 60+ design options. Using our plugin, you can style ANY **Gutenberg block** with highly customizable options that aren’t found Gutenberg or any custom blocks. For example, you can adjust background, padding, margins or corner radius for any default or custom Gutenberg block.

= Works great with any other page builder =

Stylist created for Gutenberg, but it's not limited to this page builder only. It should work without problem with other page builders like:

* Elementor
* Beaver Builder
* Visual Composer
* Live Composer
* KingComposer
* Fusion Page Builder
* Page Builder Sandwich
* BoldGrid


= Style visually any form =

You can also use our plugin to customize the forms created in the next plugins:

* Ninja Forms
* Contact Form 7
* Contact Form by WPForms
* Caldera Forms
* Easy Forms for MailChimp
* Formidable Forms

= Gutenberg Editor: Extend default styles =

With Stylist, you extend your essential Gutenberg blocks with more design options without touching any line of code.

We have advanced CSS editor for the users who wish to style their **Gutenberg blocks** using CSS code.

*Gutenberg is recommended but not required for this plugin to work*

The stylist is following Gutenberg’s interface language, so you already know how to use it.

= FREE DESIGN SETTINGS FOR ANY GUTENBERG BLOCK =

**Text Styling Options**

* Font Size
* Font Weight
* Text Color
* Font Family
* Text Align
* Line Height
* Font Style
* Text Transform
* Letter Spacing
* Word Spacing
* Text Indent
* Text Decoration
* Word Wrap

**+ 47 more design controls**

== Installation and Usage ==
1. Install and activate the plugin via your WordPress dashboard.
2. Visit any page you would like to style and click on "Style this page" link in the top admin bar.
3. Our plugin UI is very close to Gutenberg editor. You are using our plugin to style page elements created in Gutenberg.

== Frequently Asked Questions ==

= Why do I need this plugin? =
Gutenberg blocks come with limited styling possibilities. Our plugin will change the appearance of any block without a need to write complex JavaScript or CSS code.

== Screenshots ==

1. Stylist is a design customization panel compatible with any theme or page builder.
2. Visit any page you would like to style and click on "Style This Page" link in the top admin bar.
3. Save time adjusting mobile presentation of your website. All the settings in stylist are fully responsive.

== Changelog ==

= 0.2.3 =
* 🐜 Issue #32: FIXED console error caused by empty background data.
* 🐜 Issue #33: FIXED console error "r.indexOf is not a function".
* 🤝 Improved compatibility with LiveComposer plugin (section id attribute)
* 🤝 Fixed bug with SiteOrigin CSS plugin elements styling.
* 🤝 Fixed bug with Gutenberg plugin blocks styling.
* 🤝 Fixed some compatibility issues with Simple Custom CSS and JS plugin.

= 0.2.2 =
* 🐜 Issue #31: FIXED console error – only one instance of babel-polyfill is allowed
* 🐜 Issue #8: FIXED error causing !important!important in css rules.

* 🤝 Minor compatibility improvements with SiteOrigin CSS, Elementor, Beaver Builder and Gutenberg.

= 0.2.1 =
This is a quick update to fix some bugs and improve Stylist compatibility with old versions of WordPress. It also improve elements styling for other page builders (including Gutenberg, Elementor, Beaver Builder, Visual Composer, Live Composer, and KingComposer).

* 👍 Issue #29: IMPROVED color picker to close when clicked outside.
* 👍 Issue #28: IMPROVED color picker to make sure it always have HEX mode.
* 👍 Issue #27: IMPROVED performance by disabling unwanted calls to the Google Fonts directory without a need.
* 👍 Issue #21: IMPROVED the way CSS selector compose the current CSS path. Now it works properly with composed selectors that includes multiply classes or ids.
* 👍 Issue #20: IMPROVED the color picker usability by adding extra space arround selecting area. Not it's easier to customize colors on the edgest of the selecting gradient.
* 🐜 Issue #30: FIXED broken columns code in new version of Gutenberg.
* 🐜 Issue #25: FIXED unwanted syles on the editing screen.
* 🐜 Issue #24: FIXED broken css when theme or page builder render css code inline after our code inserted.
* 🐜 Issue #19: FIXED Parese error on old servers with PHP version below 5.4.
* 🐜 Issue #18: FIXED broken app error when CSS selector loose focus without confirmation from the user.
* 🐜 Issue #17: FIXED error preventing styles to apply when many Gutenberg blocks edited per session.
* 🐜 Issue #15: FIXED issue with interface jumping in responsive preview mode.
* 🐜 Issue #10: FIXED fopen: Failed to open stream... on Windows machines
* 🐜 Issue #9: FIXED Fatal error: Uncaught Error: Call to undefined function wp_doing_ajax() on very old versions of WP.
* ⛔ Issue #13: REMOVED Full Screen mode for better times.
* 💡 Add the notice that Code editor is for CSS only. *CSS gets generated by Stylist automaticaly. Advanced users are welcome to add custom CSS for their Gutenberg blocks.*

* 🤝 Improved compatibility with SiteOrigin CSS by SiteOrigin (so-css) plugin.
* 🤝 Improved compatibility with Visual CSS Style Editor By WaspThemes (yellow-pencil-visual-theme-customizer) plugin.
* 🤝 Improved compatibility with Simple Custom CSS and JS by SilkyPress.com (custom-css-js)
* 🤝 Improved compatibility with Simple Custom CSS By John Regan, Danny Van Kooten (simple-custom-css)
* 🤝 Improved compatibility with Styles By Paul Clark (styles) plugin.

= 0.2 =
* 🐜 Fixed an issue preventing styles to apply after the editing mode closed.
* 💡 Better compatibility with the latest API changes in the Gutenberg editor.

= 0.1 =
* 🏳 Initial Beta Release

This plugin is a rewritten from scratch fork of the *Yellow Pencil* Lite plugin by WaspThemes. As theme developers, we wanted to use Yellow Pencil in our projects but needed to make it much simpler for our clients. Unfortunately, Yellow Pencil code didn't provide enough filters and hooks to extend it without forking/code rewrite. The plugin's code is not-extendable and not suitable for modern JavaScript development (ReactJS). Our form of the plugin is much simpler and limited in functionality comparing to Yellow Pencil. We left only features that Gutenberg users really need and re-code everything using ReactJS framework used by the Gutenberg developers. Thank you, WaspThemes for all the ideas shared with open source community through GPL-based Yellow Pencil Lite plugin.

StylistWp is a much simpler styling plugin oriented for Gutenberg users. On other hands, Yellow Pencil is excellent for advanced web developers who don't care about extendability. Go and check their plugin to see if it's a better option for you.