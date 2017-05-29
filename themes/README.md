# This folder will contain files related to the front end

This will include html/php, css and js files.

The sub folders should be individual themes

## Structure of a theme
Currently, the theme will be very basic, allowing only minor customization

There should be the following files:

* overview.php
* single.php
* functions.php

As mentioned this takes a lot of inspiration from the WordPress theme structure although there are some important differences.

In Photo Ridge, style.css is not required and is not the place in which things such as the theme name are specified.

The function file is the only required file is the only required file and , unlike WordPress themes, it has a single required function.

This required function `init_theme` is used to specify things such as the theme name and icon etc.

