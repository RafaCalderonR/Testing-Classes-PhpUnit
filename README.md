1-Crear el fichero composer haciendo referencia al namespace donde quieras hacer
el autoload (recomendable usar el estandar psr-4)

     "autoload": {
        "psr-4": {
          "Component\\": "src/"
        }

2-Usar el comando composer dump-autoload para generar la carpeta vendor(el cual ya llevara
el autoload);

3-instalar el php unit: composer require phpunit/phpunit --dev;

4-Crear un fichero phpunit.xml para introducir la configuracion y poder usar los test
usando el comando vendor/bin/phpunit sin necesidad de meter por consola mil mierdas.

