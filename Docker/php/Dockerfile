FROM php:7.0.33-apache
RUN echo "deb http://archive.debian.org/debian stretch main" > /etc/apt/sources.list
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update \
    && apt-get install -y libmcrypt-dev \
    && docker-php-ext-install mcrypt

RUN apt-get update \
    && apt-get install wget

RUN apt-get install -y python

RUN echo "root:Very_strong_pswd" | chpasswd

RUN a2enmod rewrite
