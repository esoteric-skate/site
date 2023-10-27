# "Esoteric Skate" Site

This is a simple site for the made up brand "Esoteric Skate" for a college class. The site consist of html, vanilla js, css, php.

## About
The site is hosted on a VPS using Nginx for the web server, php-fpm, and certbot from Let's Encrypt for certificate managment.

## Structure
- `assests/` includes all assets for the site, namely fonts and images
- `includes/` php files with boilerplate code for the pages
- `pages/` all of the actual content for the diffrent pages
- `scripts/` js files for the project
- `styles/` houses css for the site

## URL's
This site has **2** diffrent locations.
- The testing and dev branch is at https://live.esoteric.host.
- The production branch is at https://esoteric.host and pulls code from this repo after it has been reviewed.

## Note
Logins are fake there is no DB all credentials are saved as session variables since this is a concept site. Be smart, don't enter any real credentials into this site.
