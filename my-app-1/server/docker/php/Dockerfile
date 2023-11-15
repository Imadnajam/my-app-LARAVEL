FROM php:8.1-fpm-bullseye

# For composer
SHELL ["/bin/bash", "-o", "pipefail", "-c"]
# 最初のコマンドはそのままnodejsをインストールするとかなり古いバージョン(最新が18系の現状において12系など)が入ってしまうため。
RUN apt-get update \
    && curl -sL https://deb.nodesource.com/setup_17.x | bash - \
    && apt-get install -y --no-install-recommends libicu-dev libonig-dev \
    libzip-dev locales unzip git vim libpng-dev gnupg libnss3 libx11-dev \
    wget openssh-client nodejs libjpeg-dev libpng-dev libfreetype6-dev \
    libjpeg62-turbo-dev libwebp-dev default-mysql-client \
    && docker-php-ext-install intl zip pdo_mysql gd bcmath \
    # docker-php-ext-configure gd --with-freetype=/usr/include/ \
    # --with-jpeg=/usr/include/ --with-webp=/usr/include/ \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* \
    && locale-gen en_US.UTF-8 \
    && localedef -f UTF-8 -i en_US en_US.UTF-8 \
    && mkdir /var/run/php-fpm
# ↓Yarnを利用できるようにするために必要な措置
# RUN apt-get remove cmdtest
RUN npm install -g yarn
# ↑Yarnを利用できるようにするために必要な措置

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set composer environment
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

COPY my.ini /usr/local/etc/php/conf.d/my.ini

# Install laravel installer
RUN composer global require "laravel/installer"

WORKDIR /var/www

