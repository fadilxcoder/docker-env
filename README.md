- PHP Extension installer : https://github.com/mlocati/docker-php-extension-installer
- To verify if extension is present, use command : `php -m|grep mysql` for example
- BUILD : `docker-compose up --build`
- UP : `docker-compose up`
- Connect to App Terminal : `docker exec -it fx_php_fpm ash`
- Verify if container is UP : `docker ps`
- URL : `http://localhost:8881/`

# Symfony

- Changes made in `docker/nginx/sites/default.conf` - line `root /var/www/html/public/;`
- DB GUI : `adminer.php` - in folder **some-configs** - copy file to folder **public** after dowloading symfony
- Credentials to login & DB connection : `src/some-configs/.env`
- Change files/folders permission : `sudo chown -R <your_linux_uname> ./ && chgrp -R <your_linux_uname> ./`
