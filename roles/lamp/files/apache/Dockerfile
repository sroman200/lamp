FROM httpd:2.4

#COPY ./public-html/ /usr/local/apache2/htdocs/


RUN apt update; \
    apt upgrade;
# Copy apache vhost file to proxy php requests to php-fpm container
COPY apache.conf /usr/local/apache2/conf/extra/apache.conf
RUN echo "Include /usr/local/apache2/conf/extra/apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf
