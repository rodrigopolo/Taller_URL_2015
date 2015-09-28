## Setup en Ubuntu

[![Tutorial](http://img.youtube.com/vi/pTgmGmPIty0/0.jpg)](https://youtu.be/pTgmGmPIty0)

### Actualización del sistema

Para asegurarnos que el sistema esté en óptimas condiciones actualizaremos los 
repositorios y el sistema, para esto ingresamos los siguientes comandos y 
seleccionando `y` cuando pregunte si acepta las actualizaciones:

```
sudo apt-get update
sudo apt-get upgrade
```

Para el taller necesitamos instalar otros paquetes, para esto ingrese los 
siguientes comandos en la termimal ingresando `y` en cada confirmación:

```
sudo apt-get install build-essential git-core tasksel curl php5-gd libssl-dev
sudo tasksel install lamp-server
```

### Configuración Apache

Nuestra aplicación requiere que esté activo tando el `mod_rewrite` como 
la opción de modificar directrices con el `.htaccess`, para ello realizamos las 
siguientes configuraciones.

Activar el mod_rewrite corriendo el siguiente comando:
```
sudo a2enmod rewrite
```

Editar las configuraciones para directrices .htaccess
```
sudo nano /etc/apache2/sites-enabled/000-default.conf
```

Agregar luego de la línea `#ServerName www.example.com` el siguiente texto:
```
	<Directory /var/www/html>
		AllowOverride all
	</Directory>
```

Guardar el archivo y salir

Luego definimos el dominio de apache, para este documento utilizaremos 
`localhost`, editamos el siguiente archivo:

```
sudo nano /etc/apache2/apache2.conf
```

Agregar la siguiente línea al principio del archivo:

```
ServerName localhost
```

Por último activamos los `short_open_tag` editando el siguiente archivo:

```
sudo nano /etc/php5/apache2/php.ini
```

Buscar el texto `short_open_tag = Off` con nano presionando la combinación de 
teclas `CTRL+W` y modificarlo a `short_open_tag = On`.

Salvar el archivo, salir del editor, y reiniciar Apache escribiendo:

```
sudo service apache2 restart
```

El siguiente paso es dar permisos al usuario administrador para escribir en la 
carpeta web, remplace `<usuario>` con el usuario administrador que utiliza 
actualmente en los siguientes comandos de la terminal e inreselos uno a uno.

```
sudo usermod -a -G www-data <usuario>
sudo chgrp -R www-data /var/www
sudo chown <usuario>:www-data -R /var/www
sudo chmod -R g+w /var/www
```

## MySQL
La aplicación utiliza MySQL para alojar toda la información, en este paso 
crearemos un usuario exclusivo para el uso del taller, antes de crear el usuario
debemos de crear la base de datos de la aplicación, utilizaremos el nombre 
`tallerurl` en este documento.

Para ingresar a la consola de MySQL utilizaremos el siguiente comando 
utilizando el usuario root y la contraseña que se definió durante la 
instalación del sistema:

```
mysql -h localhost -u root -p
```

MySQL solicitará la contraseña luego de ingresar este comando, ingrese la 
contraseña, luego ingrese el siguiente comando para crear la base de datos, no 
olvide *siempre* incluir el signo de `;` para cerrar la sentencia de MySQL:

```
CREATE DATABASE webappdb;
```

Una vez creada la base de datos crearemos el usuario para la aplicación con las 
siguientes sentencias SQL, la primera crea el usuario y la segunda le da todos 
los persmisos para leer y escribir en la base de datos de la aplicación.

```
CREATE USER 'webappusr'@'localhost' IDENTIFIED BY 'contrasenya';
GRANT ALL PRIVILEGES ON webappdb.* to 'webappusr'@'localhost' identified by 'contrasenya';
```

Para salir de MySQL ingrese `exit` y presione la tecla de `Enter`.

Para installar composer:
```
cd
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
```


