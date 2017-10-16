# Introduction
Encrypt location on the Google Maps using Android pattern lock as the password and symmetric encryption to encrypt marker's location and download encrypted coordinates for later use.

Time: 6 hours - once I started using basic project structure from my other small project.

# Requirements

- PHP 5.6+
- PHP mcrypt extension needs to be enabled

## Installation
1. Clone the project into your web server by running:  `git clone https://github.com/marncz/php-location-encrypt.git`
2. Due to Google's Map API restrictions, please do test on local web server running on either `127.0.0.1` or `localhost`
3. Make sure that the `encrypted` directory is writeable

# Design choices
- Used `o/crypt-php` as the symmetric encryption library. 
- There is some JavaScript code in use, for validation etc. but the form handlers are done in PHP. 
- Used Bootstrap for front-end layout.
- Following basic MVC design principles. 
