# Wordpress Plugin Skeleton

Use this skelton to kickstart your Wordpress Plugin development.

It has a built-in Templating Engine (Twig) and a composer.json file to add some extra packages.

## Install Composer

You need Composer to use this skeleton:

<http://getcomposer.org/doc/00-intro.md#installation>

## Install Skeleton

1. Switch to your Wordpress Plugin folder in /wp-content/plugins/

2. Use your installed composer to checkout this skeleton

   `php composer.phar create-project mmdc/wp-plugin-skeleton [my-plugin-name]`

or using system-wide installed composer

   `composer create-project mmdc/wp-plugin-skeleton [my-plugin-name]`

3. Happy coding!

## Usage

1. Activate the plugin in backend

2. Use shortcodes (e.g. [mmdc_index_index]) in frontend to get some output

### Notes

Feel free to change the following:

*  Name of the main plugin file: `my_plugin.php`
*  My default namespace `MMDC`. You could just do a Find&Replace on MMDC.

## ToDo

* Use `post-create-project-cmd` event to rename namespace on installation