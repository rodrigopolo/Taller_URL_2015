## Instalación de Software para Windows
* Instalar Google Chrome
* Instalar Sublime Text 3
* Instalar Git
* Instalar WAMP
  * Instalar primero los `vcredist*.exe`.
  * Instalar WAMP
* Settings extras
* Instalar Composer
* Configurar MySQL


1. Activar `mod_rewrite` en el panel de WAMP.
2. Activar short tags en el panel de WAMP.
3. Configurar Windows File Explorer para ver archivos ocultos.
4. Agregar las rutas de PHP y MySQL al `%PATH%` de Windows.
5. Configurar la terminal de Git


Correr en phpMyAdmin
```
CREATE USER 'webappusr'@'localhost' IDENTIFIED BY 'contrasenya';
CREATE DATABASE webappdb;
GRANT ALL PRIVILEGES ON webappdb.* to 'webappusr'@'localhost' identified by 'contrasenya';
```


### Composer
```
php -r "readfile('https://getcomposer.org/installer');" | php
```

Crear archivo `composer.bat` con el siguiente contenido:
```
@echo off
:: Batch path
SET THIS_PATH=%~d0%~p0
php %THIS_PATH%composer.phar %*
```