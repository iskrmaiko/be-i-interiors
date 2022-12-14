FROM php:7.1-apache

RUN apt-get update && \
    apt-get install -y \
        zlib1g-dev

RUN apt-get install -y \
        libxml2-dev

RUN docker-php-ext-install mysqli pdo pdo_mysql mbstring zip xmlwriter
RUN apt-get install libssl-dev -y

# Install mcrypt
RUN apt-get install -y libmcrypt-dev
RUN docker-php-ext-install mcrypt

# Install GD
RUN apt-get install -y libfreetype6-dev libjpeg-dev libpng-dev
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install gd

# Install XSL
RUN apt-get install -y libxslt-dev
RUN docker-php-ext-install xsl

RUN pecl channel-update pecl.php.net

# Install intl
RUN apt-get install -y libicu-dev
# RUN pecl install intl
RUN docker-php-ext-install intl
RUN docker-php-ext-install intl

ARG USERNAME=vscode
ARG USER_UID=1000
ARG USER_GID=$USER_UID

# Configure apt and install packages
RUN apt-get update
RUN apt-get -y install --no-install-recommends apt-utils dialog
RUN apt-get -y install git iproute2 procps iproute2 lsb-release
# RUN yes |
RUN pecl install xdebug-2.6.1 && docker-php-ext-enable xdebug
ADD ./php.ini $PHP_INI_DIR/conf.d/

RUN echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini
RUN echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN echo "xdebug.remote_autostart=on" >> /usr/local/etc/php/conf.d/xdebug.ini

RUN groupadd --gid $USER_GID $USERNAME
RUN useradd -s /bin/bash --uid $USER_UID --gid $USER_GID -m $USERNAME
RUN apt-get install -y sudo

RUN echo $USERNAME ALL=\(root\) NOPASSWD:ALL > /etc/sudoers.d/$USERNAME

RUN chmod 0440 /etc/sudoers.d/$USERNAME
RUN apt-get autoremove -y
RUN apt-get clean -y
RUN rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite
# RUN usermod -u 1000 www-data
# RUN usermod -G staff www-data