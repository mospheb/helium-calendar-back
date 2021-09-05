FROM php:7.4-apache

RUN apt-get update && \
apt-get install -y \curl 
RUN rm -rf /var/lib/apt/lists/*

COPY ./src/ /var/www/html

CMD sed -i "s/80/$PORT/g" /etc/apache2/sites-enabled/000-default.conf /etc/apache2/ports.conf && docker-php-entrypoint apache2-foreground





# RUN docker-php-ext-install pdo pdo_mysql