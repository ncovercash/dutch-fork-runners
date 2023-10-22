FROM trafex/php-nginx:latest

COPY . /var/www/html

USER root

RUN sed 's|location ~ /\\.|location ~ /(\\.\|src)|' /etc/nginx/conf.d/default.conf

USER nobody
