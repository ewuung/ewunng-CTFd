FROM ubuntu:20.04

ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update
RUN apt-get install -y apache2
RUN apt-get install -y php
COPY src/db.php /var/www/html
COPY src/home.php /var/www/html
COPY src/login.php /var/www/html
COPY src/logout.php /var/www/html
COPY src/main.php /var/www/html
ENTRYPOINT apachectl -D FOREGROUND
EXPOSE 80/tcp
