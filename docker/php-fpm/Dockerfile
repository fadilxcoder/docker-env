FROM php:7.4-fpm-alpine

ADD install-php-extensions /usr/local/bin/

RUN chmod uga+x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions gd xdebug pdo_mysql mysqli
    
COPY --from=composer /usr/bin/composer /usr/bin/composer

COPY ./config/php.ini /usr/local/etc/php/

CMD ["php-fpm"]

EXPOSE 9000