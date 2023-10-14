# This Respository Is The Home For The Esoteric Skate Site

This is a simple site for the made up brand "Esoteric Skate" for a college class. The site consist of html, vanilla js, css, php, and mysql.

## About
The site is hosted on a VPS using Nginx for the web server, myphpadmin to manage the mysql DB, php-fpm, and certbot from Let's Encrypt for certificate managment.  

## Structure
- `assests/` includes all assets for the site, namely fonts and images
- `includes/` php files with boilerplate code for the pages
- `pages/` all of the actual content for the diffrent pages
- `scripts/` js files for the project
- `services/` houses css for the site

## Domains
This site has **2** diffrent domains.
- Domain one (https://live.esoteric.host) is for testing and development.
- Domain two (https://esoteric.host) is the production URL which pulls code from this repo after it has been reviewed.
