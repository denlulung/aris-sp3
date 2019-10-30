FROM ubuntu:latest

ENV TZ=Europe/Minsk
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN apt-get update && apt-get -y install apache2 php7.2-cli

WORKDIR /var/www/html

RUN apt-get update && apt-get -y install wget unzip
# RUN docker-php-ext-install pdo pdo_mysql
RUN wget https://github.com/denlulung/aris-sp3/archive/master.zip
RUN unzip master.zip
RUN mv aris-sp3-master/docker-landingpage/* .

RUN service apache2 restart

EXPOSE 80

CMD apachectl -D FOREGROUND
