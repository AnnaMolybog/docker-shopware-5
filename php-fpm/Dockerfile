FROM phpdockerio/php71-fpm:latest

ARG USERID=500
ARG GROUPID=500

RUN apt-get update -qq && apt-get install -y -qq openjdk-8-jre-headless \
    && apt-get update -qq && apt-get install -y -qq  openjdk-8-jdk && dpkg --configure -a

# Install php7 packages
RUN apt-get update -qqy && \
    apt-get install -qqy \
    php7.1-fpm \
    php7.1-cli \
    php7.1-common \
    php7.1-curl \
    php7.1-json \
    php7.1-gd \
    php7.1-mcrypt \
    php7.1-mbstring \
    php7.1-odbc \
    php7.1-pgsql \
    php7.1-mysql \
    php7.1-sqlite3 \
    php7.1-xmlrpc \
    php7.1-opcache \
    php7.1-intl \
    php7.1-xml \
    php7.1-soap \
    php7.1-zip \
    php7.1-bz2 \
    php7.1-dev


RUN apt-get update && apt-get install -qqy \
    libfreetype6-dev \
    libmcrypt-dev \
    libpng12-dev \
    imagemagick \
    libxslt-dev \
    libcurl4-gnutls-dev \
    unzip \
    wget \
    mysql-client \
    php-pear \
    libssl-dev \
    ant

RUN apt-get update && apt-get install -y libmagickwand-6.q16-dev --no-install-recommends \
    && ln -s /usr/lib/x86_64-linux-gnu/ImageMagick-6.8.9/bin-Q16/MagickWand-config /usr/bin/ \
    && pecl install imagick \
    && echo "extension=imagick.so" >  /etc/php/7.1/fpm/conf.d/20-imagick.ini \
    && pecl install apcu \
    && echo "extension=apcu.so" > /etc/php/7.1/fpm/conf.d/20-apcu.ini \
    && rm -rf /var/lib/apt/lists/*

RUN mkdir /application \
    && usermod -u $USERID -d /application www-data \
    && chown www-data:www-data /application \
    && usermod -u $USERID -d /run www-data \
    && chown www-data:www-data /run

WORKDIR "/application"
USER www-data
