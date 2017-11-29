# Blog
Free Blog with AdminLTE administration panel easy integrated with laravel

Manual de instalación:

1- Download composer:


2- Install Laravel 5.5:

	composer create-project --prefer-dist laravel/laravel [project_name] 5.5

3- Add this repo to your composer.json

    cloudware-square/free-blog:dev-master

4- Modify your composer.json

	 "psr-4": {
		"App\\": "app/",
	    	"Cloudware\\Blog\\": "vendor/cloudware-square/blog/src"
		}

and update composer

	composer dump-autoload
	composer update

5- Add de Service Provider in your config/app.php

    Cloudware\Blog\CloudwareStudioBlogServiceProvider::class

6- Publish this vendor

	php artisan vendor:publish

7- Run Migrations

	php artisan migrate

8- Añadir en cualquier parte de la app un enlace a la ruta principal (en un botón por ejemplo) para acceder al componente

	/admin

* You need the Laravel default middleware auth.

# Visit us in: www.cloudware-square.com
