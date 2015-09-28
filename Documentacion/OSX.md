## Instalación de Software en OS X

* Instalar Git
* Instalar Google Chrome
* Instalar Sublime Text 3
* Instalar MAMP
* Settings extras
* Instalar Composer
* Configurar MySQL

Para instalar Git ejecutar en la terminal el comando `git` para aceptar la instalación de Xcode:
```
git
```

Una vez instalado MAMP agregamos al `$PATH` la ruta de los ejecutables/binarios de PHP y MySQL, para ello ejecutamos los siguientes comandos en la terminal:

```
echo 'export PATH=/Applications/MAMP/Library/bin:/Applications/MAMP/bin/php/php5.6.10/bin:$PATH' >> ~/.bashrc 
echo . ~/.bashrc >> ~/.bash_profile
. ~/.bashrc
```

Luego instalamos Composer ejecutando los siguientes comandos:
```
curl -sS https://getcomposer.org/installer | php
sudo mkdir -R /usr/local/bin
sudo mv composer.phar /usr/local/bin/composer
```

Y por último configuramos creamos la base de datos y usuario en MySQL via phpMyAdmin, para ello arrancamos los servicios via el app de MAMP.

```
CREATE USER 'webappusr'@'localhost' IDENTIFIED BY 'contrasenya';
CREATE DATABASE webappdb;
GRANT ALL PRIVILEGES ON webappdb.* to 'webappusr'@'localhost' identified by 'contrasenya';
````









