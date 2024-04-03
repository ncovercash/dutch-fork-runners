FROM composer AS composer

  WORKDIR /
  COPY src/composer.json .
  COPY src/composer.lock .

  RUN composer install --optimize-autoloader --no-interaction --no-progress

FROM ghcr.io/ncovercash/docker-php-nginx:v1.2.1

  COPY --from=composer /vendor /var/www/html/src/vendor

  USER root

  RUN apk add --no-cache php83-pecl-imagick php83-pdo_sqlite

  RUN sed -i 's|location ~ /\\.|location ~ /(\\.\|src)|' /etc/nginx/conf.d/default.conf
  RUN sed -i -E 's|try_files \$uri \$uri/.+|try_files \$uri \$uri/ =404;|' /etc/nginx/conf.d/default.conf

  RUN echo "* * * * * cd /var/www/html/src/Instagram && php cron.php" >> /etc/crontabs/nobody
  RUN chown nobody:nobody /etc/crontabs/nobody

  COPY . /var/www/html

  USER nobody
