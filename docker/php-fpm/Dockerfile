# php-fpm
# FROM php:fpm-alpine
# FROM php:7.4-fpm-alpine
FROM php:8.1-fpm-alpine

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions gd xdebug pdo_mysql mysqli
    

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
    
# RUN docker-php-ext-install pdo_mysql
# RUN docker-php-ext-install mysqli

COPY ./config/php.ini /usr/local/etc/php/

CMD ["php-fpm"]

EXPOSE 9000