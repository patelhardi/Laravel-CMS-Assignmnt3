# php-cms-laravel

A few notes regarding the CMS:

Steps to working with this repo:
1. Clone repo in your folder
2. Create .env file in the folder
3. Connect with your server
4. Change database info in the .env file

The CMS uses the public storage driver, make sure to update your .env file to:

```php
FILESYSTEM_DRIVER=public
APP_URL=http://localhost/
```

The database setup includes migrations and seeding. Run the following command to initialize the database:

```
php artisan key:generate
php artisan migrate:refresh --seed
```

All user acocunts will have the default password of "password".

## Tutorial Requirements:

* [Visual Studio Code](https://code.visualstudio.com/) or [Brackets](http://brackets.io/) (or any code editor)
* [Laravel](https://laravel.com/)

## Group Members:

Hardi Patel - Responsible for Headers, About Me, And Contact Form Sections <br>
Mahshad Naghashan - Responsible for Skills, Projects, And Footer Sections  <br>
Admin Page designed by Hardi  <br>
Section Form Pages designed by Mahshad <br>
