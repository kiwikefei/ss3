FROM debian:9.0
MAINTAINER andy.tang@arizto.co.nz

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get -qq update
RUN apt-get -qqy install \
        sudo wget lynx telnet \
        vim curl make git-core \
        locales bzip2 \
        apt-transport-https ca-certificates lsb-release

RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
RUN echo "deb https://packages.sury.org/php/ stretch main" > /etc/apt/sources.list.d/php.list

RUN apt-get update && \ 
    apt-get -y install php7.1 php7.1-common php7.1-mysql \
    php7.1-curl php7.1-json php7.1-gd \
    php7.1-mcrypt php7.1-msgpack \
    php7.1-intl php7.1-tidy \
    php7.1-mbstring php7.1-xml php7.1-zip
RUN ln -sf /usr/bin/php7.1 /usr/bin/php
RUN echo "LANG=en_US.UTF-8\n" > /etc/default/locale && \
	echo "en_US.UTF-8 UTF-8\n" > /etc/locale.gen && \
	locale-gen

ENV LANG en_US.UTF-8

RUN	wget https://getcomposer.org/composer.phar && \
	chmod +x composer.phar && \
	mv composer.phar /usr/local/bin/composer

RUN a2enmod rewrite && \
	a2enmod expires && \
	rm -r /var/www/html && \
    echo "date.timezone = Pacific/Auckland" > /etc/php/7.1/apache2/php.ini && \
    echo "date.timezone = Pacific/Auckland" > /etc/php/7.1/apache2/php.ini

COPY apache_default_vhost /etc/apache2/sites-available/000-default.conf
COPY bootstrap /usr/local/bin/bootstrap


EXPOSE 80

VOLUME /var/www

WORKDIR /var/www

CMD ["/usr/local/bin/bootstrap"]
