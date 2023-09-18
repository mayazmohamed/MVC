
FROM php:7.4-apache

WORKDIR /var/www/html

COPY . .

RUN docker-php-ext-install pdo pdo_mysql

RUN a2enmod rewrite

# RUN npx tailwindcss -i ./public/css/index.css -o ./dist/output.css --watch

EXPOSE 80

CMD ["apache2-foreground"]