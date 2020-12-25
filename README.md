# NGINX / PHP-FPM / ADMINER

- PHP Extension installer : https://github.com/mlocati/docker-php-extension-installer
- To verify if extension is present, use command : `php -m|grep mysql` for example
- BUILD : `docker-compose up --build`
- UP : `docker-compose up`
- Connect to App Terminal : `docker exec -it fx_php_fpm ash`
- Verify if container is UP : `docker ps`
- URL : `http://localhost:8881/`