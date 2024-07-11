FROM php:8.2-apache
RUN docker-php-ext-install pdo pdo_mysql mysqli
#COPY ./html /var/www/html/
# Add a volume
VOLUME ["/var/www/html/"]
EXPOSE 80/tcp
