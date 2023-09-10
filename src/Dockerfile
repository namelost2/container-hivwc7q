FROM php:8-apache
RUN sed -i "s/80/5000/g" /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf
COPY ./web /var/www/html