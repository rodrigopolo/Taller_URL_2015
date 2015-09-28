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




Correr en phpMyAdmin
```
CREATE USER 'webappusr'@'localhost' IDENTIFIED BY 'contrasenya';
CREATE DATABASE webappdb;
GRANT ALL PRIVILEGES ON webappdb.* to 'webappusr'@'localhost' identified by 'contrasenya';
```