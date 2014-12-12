## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)


## Surfme Issues

1. Imagine image manipulation library in order to get it working you need to install imagick to your vm

## ssh to your vagrant
vagrant ssh

## update your applications
sudo apt-get update

## install imagemagick
sudo apt-get install imagemagick

## install php5-imagick
sudo apt-get install php5-imagick

## restart your php5-fpm service
sudo service php5-fpm restart

2. Phpmyadmin is not installed by default for the Homestead vm

## ssh to your vagrant
vagrant ssh

## install phpmyadmin
sudo apt-get install phpmyadmin

## create a symbol link to dir
sudo ln -s /usr/share/phpmyadmin/ /usr/share/nginx/html/phpmyadmin

## serve the phpmyadmin.app to the specified dir
serve phpmyadmin.app /usr/share/nginx/html/phpmyadmin

## in your local machine edit your /etc/hosts -
add 127.0.0.1 phpmyadmin.app in order to allow access from your browser

