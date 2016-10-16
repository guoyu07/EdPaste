# EdPaste
EdPaste is a Laravel 5.2 (PHP Framework)-driven self-hosted Pastebin. Demo : https://paste.edraens.net

Just git clone this repo on your server, make the `public` folder your webserver's `DocumentRoot`, for instance with an Apache2.4 VirtualHost :
```
<VirtualHost *:80>
    ServerName your.vhost.server.com
    DocumentRoot /app/path/public
</VirtualHost>
```
Run a `composer install`/`php composer install`(depends of your configuration) within the app root path (you'll need composer)
Rename `.env.example` to `.env` and run `php artisan key:generate` from the app's root path.
Open `.env` and fill it with your database details, and with Secret and Site Key from Google's reCaptcha (in order to avoid spam from guests)
Run `php artisan migrate` from the app's root path, and you're all done.

Go to `http://your.vhost.server.com/` which leads to the DocumentRoot `/app/path/public`, and this should work !

# Todo :
- Users accounts managements isn't implemented yet, as well as the users dashboard.