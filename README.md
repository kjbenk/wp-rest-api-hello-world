# WP REST API Hello World

[![Build Status](https://travis-ci.org/kjbenk/wp-rest-api-hello-world.svg?branch=master)](https://travis-ci.org/kjbenk/wp-rest-api-hello-world)

A Hello World example for the [WordPress REST API](http://v2.wp-api.org).  Install this plugin and go the the `/wp-json/wprahw/hello-world` endpoint on your site and you will see an Hello World JSON Response.

## Unit Testing

You can perform PHPUnit tests on this plugin by simply going to the plugin directory and typing in these commands:

1. `phpunit`
1. `phpunit -c multisite.xml`

## PHP Validation

You can run a WordPress PHP code standards validator script by performing these commands:

1. `npm install`
1. `composer install`
1. `grunt phpcs`
