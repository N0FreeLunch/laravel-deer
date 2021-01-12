Install php
===========

Install php
-----------
```
```

Install php Extension
---------------------
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

Install Composer
----------------
```
```


Install laravel (version 8)
===========================

Install laravel in ubuntu
-------------------------
```
composer global require laravel/installer
```


-bash: laravel: command not found
---------------------------------
```
echo 'export PATH="~/.composer/vendor/bin:$PATH"' >> ~/.bashrc
source ~/.bashrc
```

make laravel project
--------------------
```
laravel new projectname
composer install
npm install
```


Run server
----------
```
php artisan serve
```
