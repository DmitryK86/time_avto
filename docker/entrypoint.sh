#!/bin/sh

cd /var/www
composer install -o
chown -R www-data:www-data vendor
./yiiDocker migrate/up -c --interactive=0
docker-php-entrypoint php-fpm && nginx -g 'daemon off;'