FROM nginx:1.13

ADD nginx.conf /etc/nginx/
ADD auto-de.conf /etc/nginx/conf.d/

RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf

RUN usermod -u 1000 www-data
