# Live demo

Live demo of the app is available here: http://underhat.net/php-location-encrypt

# Introduction
Encrypt location on the Google Map using Android pattern lock as the password.

# Requirements

- PHP 5.6+
- PHP mcrypt extenstion needs to be enabled

## Installation
1. Clone the project into your web server by running:  `git clone https://github.com/marncz/php-location-encrypt.git voting`
2. Make sure that the `encrypted` directory is writtable

# Design choices
- Used `o/crypt-php` as the symmetric encryption library
