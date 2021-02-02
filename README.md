# Install php

## Install php
```
```

## Install php Extension
```
sudo apt-get install php-bcmath
sudo apt-get install php7.4-ctype
sudo apt-get install php-json
sudo apt-get install php-mbstring
sudo apt-get install openssl
sudo apt-get install php7.4-pdo
sudo apt-get install php-tokenizer
sudo apt-get install php-xml
```

## Install Composer
```
```


# Install laravel (version 8)

## Install laravel in ubuntu
```
composer global require laravel/installer
```


## -bash: laravel: command not found
```
echo 'export PATH="~/.composer/vendor/bin:$PATH"' >> ~/.bashrc
source ~/.bashrc
```

## make laravel project
```
laravel new projectname
composer install
npm install
```


## Run server
----------
```
php artisan serve
```


## install sqlite3
```
sudo apt-get install php7.4-sqlite
```

### .env setting
```
#DB_CONNECTION=mysql
#DB_HOST=127.0.0.1
#DB_PORT=3306
#DB_DATABASE=laravel_deer
#DB_USERNAME=root
#DB_PASSWORD=

DB_CONNECTION=sqlite
```

### migration
```
  php artisan migrate
```

### sqlite command line access
In laravel root directory
```
sqlite3 database/database.sqlite
```

### exit sqlite shell
```
sqlite3 database/database.sqlite
```
