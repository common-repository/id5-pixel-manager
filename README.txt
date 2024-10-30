=== ID5 Pixel Manager ===

Contributors: smenzer, id5technology
Tags: adtech, ad, advertising, usersync, cookie sync
Requires at least: 3.0.1
Tested up to: 5.0
Requires PHP: 5.6
Stable tag: 1.0.8
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily add the ID5 cookie syncing pixel on your website with this plugin. For more information, visit [https://id5.io](https://id5.io).

== Description ==

## Overview
Easily add the ID5 cookie syncing pixel on your website. This plugin will handle the code required to deploy the pixel asynchronously at the end of the page as to not impact the rest of the page load or user experience.

## Sample Code
The Javascript used to execute the ID5 pixel is very straightforward and does nothing beyond writing the ID5 image pixel to the page. Here is an example of the code used: `document.addEventListener('DOMContentLoaded',function(){(new Image()).src='//id5-sync.com/i/113/9.gif';},false);`

## Requirements
In order to use this plugin and the ID5 pixel, you must be an ID5 customer. If you are not already signed up, please visit [id5.io](http://id5.io) or email us at contact@id5.io.

Once you are registered with us, we'll issue you an Account Number that you will enter in the Settings section of the plugin after installing.

## About ID5

= Our Story =
ID5 was born out of a frustration: that the best audience segmentation strategies are useless if audiences cannot be activated properly. A group of adtech and martech professionals started thinking about ways to solve this issue and to provide a better experience to data-driven marketers. They became ID5.

= Our Vision =
ID5 doesn't believe in closed ecosystems. The future of digital marketing has to be open, and independent platforms have to be able to communicate effectively to deliver on the promise of data-driven marketing. ID5 is a key component in this open ecosystem : a unification layer enabling adtech and martech platforms to share consumer information effectively, immediately and effortlessly.

= Our Team =
Created by seasoned digital adtech and martech professionals, ID5 boasts one of the best teams of "digital plumbers" on the market. We know web tracking, big data infrastructures, graph databases, APIs, and more. We are ambitious, focused and agile. We are ID5.

= Helpful Links =
[ID5.io](https://www.id5.io/)
[Privacy Policy](https://www.id5.io/privacy)
[Cookie Policy](https://www.id5.io/cookie-policy)
[Customer Login](https://console.id5.io)

== Installation ==

= Using the Wordpress Plugin Directory =
1. Click the 'Install Now' button
2. Activate the plugin

= Using a Manual Upload =
1. Unzip the `id5-wp-pixel-manager.zip` file and upload the resulting directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

= Setup =
Once you have activated the plugin, simply head to the Settings page and enter your ID5 Account Number. If you do not know your Account Number, you can get it from your ID5 account representative or the [ID5 Console](https://console.id5.io)).

== Screenshots ==

1. Head to the settings page where you'll be able to enter your ID5 Account Number
2. After entering your Account Number, hit save and you're all set!
3. Visit your Wordpress site and using Developer Tools you'll be able see our Javascript is called and the ID5 pixel is written to the page.

== Changelog ==

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.0 =
* Initial release