from php:7.1-apache

WORKDIR /var/www/html

RUN apt-get update && apt-get -y install unzip wget
RUN wget https://github.com/sdcilsy/sosial-media/archive/master.zip
RUN unzip master.zip
RUN mv sosial-media-master/* .

RUN service apache2 restart

EXPOSE 80