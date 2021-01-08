FROM ubuntu:20.04

ENV LANG="en_US.UTF-8" \
    LC_ALL="en_US.UTF-8" \
    LANGUAGE="en_US.UTF-8" \
    TERM="xterm" \
    DEBIAN_FRONTEND="noninteractive" \
    SYMFONY_ALLOW_APPDEV=1 \
    NODE_VERSION=12.14.1 \
    COMPOSER_ALLOW_SUPERUSER=1

EXPOSE 80 443 8080
WORKDIR /srv/www

RUN apt-get update -q && \
    apt-get install -qy software-properties-common language-pack-en-base && \
    export LC_ALL=en_US.UTF-8 && \
    export LANG=en_US.UTF-8 && \
    add-apt-repository ppa:ondrej/php && \
    apt-get update -q && \
    apt-get install --no-install-recommends -qy \
        ca-certificates \
        cron \
        curl \
        ssh \
        vim \
        zsh \
        nginx \
        git \
        graphviz \
        mysql-client \
        php7.4 \
        php7.4-bcmath \
        php7.4-common \
        php7.4-curl \
        php7.4-dom \
        php7.4-fpm \
        php7.4-gd \
        php7.4-iconv \
        php7.4-intl \
        php7.4-json \
        php7.4-mbstring \
        php7.4-mysql \
        php7.4-pdo \
        php7.4-phar \
        php-xdebug \
        php7.4-xml \
        php7.4-zip \
        php-zip \
        php-apcu \
        php-uuid \
        supervisor \
        tzdata \
        wget && \
    apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* && \
    cp /usr/share/zoneinfo/Europe/Warsaw /etc/localtime && echo "Europe/Warsaw" > /etc/timezone && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    curl -L -o /tmp/nodejs.tar.gz https://nodejs.org/dist/v${NODE_VERSION}/node-v${NODE_VERSION}-linux-x64.tar.gz && \
    tar xfvz /tmp/nodejs.tar.gz -C /usr/local --strip-components=1 && \
    rm -f /tmp/nodejs.tar.gz && \
    npm install yarn -g && \
    mkdir /run/php

COPY php.ini /etc/php/7.4/cli/conf.d/50-setting.ini
COPY php.ini /etc/php/7.4/fpm/conf.d/50-setting.ini
COPY pool.conf /etc/php/7.4/fpm/pool.d/www.conf
COPY nginx.conf /etc/nginx/nginx.conf
COPY app.conf /etc/nginx/app.conf
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

RUN useradd --create-home --shell /bin/bash appuser
RUN chown appuser:appuser -R /srv
RUN chown appuser:appuser -R /home/appuser

RUN echo 'alias phpunit="vendor/bin/phpunit"' >> /home/appuser/.zshrc

CMD ["supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]