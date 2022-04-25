# NGINX / APACHE / PHP-FPM / ADMINER

- PHP Extension installer : https://github.com/mlocati/docker-php-extension-installer (Git repo)
- **NOTE** : Replace with : `https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions`

**Example** :
```
FROM php:7.2-cli

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions gd xdebug
```

- To verify if extension is present, use command : `php -m|grep mysql` for example
- Connect to App Terminal : `docker exec -it fx_php_fpm ash`
- Verify if container is UP : `docker ps`

# NOTES

- Docker Apache : https://github.com/fadilxcoder/docker-env/tree/master-apache
- Docker symfony : https://github.com/fadilxcoder/docker-env/tree/symfony
- BUILD / UP : `docker-compose up --build -d`
- UP : `docker-compose up`
- DOWN : `MySQL version - docker-compose down --remove-orphans`

# DETAILS
- PHP : `8.1.5`
- NGINX : `nginx/1.21.6`
- MySQL version : `10.7.3-MariaDB-1:10.7.3+maria~focal`

# URL

- URL : http://localhost:8881/
- PHPINFO : http://localhost:8881/phpinfo.php
- ADMINER : http://localhost:8881/adminer.php
- - **Server** : `database`
- - **Username** : `myuser`
- - **Password** : `secret`
- - **Database** : `mydb`