# Deploy Laravel 8 en AWS


### Actualización de paquetes Ubuntu
`sudo apt-get update`  

`sudo apt-get upgrade`  

`sudo apt-get update`  

### Apache2
`sudo apt-get install apache2`  

### PHP 7.4
`sudo apt install php php-cli php-fpm php-json php-common php-mysql php-zip php-gd php-mbstring php-curl php-xml php-pear php-bcmath php-pgsql`  

### Composer
[https://getcomposer.org/download/](https://getcomposer.org/download/)  

`php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`

`php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"`

`php composer-setup.php`

`php -r "unlink('composer-setup.php');"`

`sudo mv composer.phar /usr/local/bin/composer`

### Modo reescritura Apache2
`sudo a2enmod rewrite`  


### Configuración Apache2 
`sudo nano /etc/apache2/apache2.conf`  

`<Directory /home/ubuntu/>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
</Directory>
`  

###  Sitio por defecto Apache2  
`sudo nano /etc/apache2/sites-enabled/000-default.conf`  

### Configuración php.ini
`sudo nano /etc/php/7.4/apache2/php.ini`

### Reinicio del servidor Apache2
`sudo service apache2 restart`

### Instalación de postgresql

`sudo apt install postgresql postgresql-contrib`

`sudo systemctl start postgresql.service`

#### Creación de usuario postgresql

`sudo -i -u postgres`

`createuser --interactive --pwprompt`

`psql`

`create database taller_dse;`
