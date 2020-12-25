# APACHE / PHP-FPM / PHPMYADMIN

- PHP Extension installer : https://github.com/mlocati/docker-php-extension-installer
- To verify if extension is present, use command : `php -m|grep mysql` for example - checking mysql
- BUILD : `docker-compose up --build`
- UP with no logs : `docker-compose up -d`
- Connect to App Terminal : `docker exec -it fx_php_fpm ash`
- Verify if container is UP : `docker ps`
- You might need to create `data` folder in `docker/database`
# URLS

- PHPMYADMIN URL : `http://localhost:8000/`
- APP URL : `http://localhost:8881/`

# DB CONNECTION (PMA)

- Server : **database**
- Username : **myuser**
- Password : **secret**