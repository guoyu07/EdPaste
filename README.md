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

# Contributing :
You're free to fork this and modify it as you want (according to MIT license), but please don't remove my name at the bottom of each page. If you look at the code, you'll notice that all the comments are written in french, as I am a french developer and I don't wan't to waste time translating my own comments. If you want english comments instead, feel free to ask it, I'll translate all of these.

# Todo :
- User dashboard (manage pastes etc) : Read-only dashboard available, working on it.
- User account management
- Maybe an admin panel, I don't really know if it's useful as the entire site may be managed directly and easily from the database...
