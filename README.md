Install laravel
===============

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
```
