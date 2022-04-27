FROM debian:latest

RUN apt-get update && \
    apt-get install -y \
    apache2 \
    cron \
    php
    
COPY html/admin /var/www/html/admin
COPY html/images /var/www/html/images
COPY html/pages /var/www/html/pages
COPY html/templates /var/www/html/templates
COPY html/index.php /var/www/html/index.php
COPY html/robots.txt /var/www/html/robots.txt
COPY root /var/spool/cron/crontabs/root
COPY flag.txt /flag.txt

EXPOSE 10000

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]