FROM composer AS composer

  WORKDIR /
  COPY src/composer.json .
  COPY src/composer.lock .

  RUN composer install --optimize-autoloader --no-interaction --no-progress

FROM ghcr.io/ncovercash/docker-php-nginx:v1.2.1

  COPY --from=composer /vendor /var/www/html/src/vendor

  USER root

  RUN sed -i 's|location ~ /\\.|location ~ /(\\.\|src)|' /etc/nginx/conf.d/default.conf
  RUN sed -i -E 's|try_files \$uri \$uri/.+|try_files \$uri \$uri/ =404;|' /etc/nginx/conf.d/default.conf

  COPY . /var/www/html

  USER nobody
