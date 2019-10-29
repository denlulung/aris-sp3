from php:7.1-apache

WORKDIR /var/www/html

RUN apt-get update && apt-get -y install wget unzip
RUN docker-php-ext-install pdo pdo_mysql
RUN wget https://github.com/denlulung/aris-sp3/archive/master.zip
RUN unzip master.zip
RUN mv aris-sp3-master/docker-pesbuk/* .
# RUN apt-get -y install php7.1-mysql

RUN service apache2 restart

EXPOSE 80
