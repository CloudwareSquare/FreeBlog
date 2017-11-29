# Blog
Free Blog with AdminLTE administration panel easy integrated with laravel

Manual de instalación:

1- Instalación de laravel:

	composer create-project --prefer-dist laravel/laravel [nombre_proyecto]

2- Instalación del middleware auth:

	php artisan make:auth

3- Descarga del paquete de cloudware-studio

	composer require cloudware-studio/blog:dev-master 

probar si no funciona con :dev-stable

4- Modificar archivo composer.json

	 "psr-4": {
		"App\\": "app/",
	    	"Cloudware\\Blog\\": "vendor/cloudware-studio/blog/src"
		}

ejecutar tras modificar el composer.json:

	composer dump-autoload y composer update.

5- Añadir el provider en el array de providers en config/app.php

    Cloudware\Blog\CloudwareStudioBlogServiceProvider::class,

6- Publicar los archivos del vendor

	php artisan vendor:publish

7- Migración de la bd:

	php artisan migrate

8- Añadir en cualquier parte de la app un enlace a la ruta principal (en un botón por ejemplo) para acceder al componente

	/admin

*los modelos, las rutas y los controladores no es necesario crearlos, ya están en el componente, lo que si es necesario tener instalado el middleware auth ya que algunas de las rutas internas del componente requieren estar autenticado en la app.

# Por favor, visitenos en www.cloudware-studio.com
# Enjoy!! :)
