FROM php:8.1.17-fpm



# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    vim \
    zip \
    curl \
    sudo \
    unzip \
    libicu-dev \
    libbz2-dev \
    libpng-dev \
    libjpeg-dev \
    libzip-dev \
    libmcrypt-dev \
    libreadline-dev \
    libxml2-dev \
    libfreetype6-dev \
    apt-file \
    wget \
    nano \
    g++

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql

RUN docker-php-ext-install pdo  zip exif \
    && docker-php-ext-enable exif

# Get latest Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Create system user to run Composer and Artisan Commands


#RUN addgroup -g 1000 -S www-data && \
#    adduser -u 1000 -S www-data -G www-data

#USER www-data


RUN useradd -G www-data,root -u 1000 -d /home/stephane stephane
RUN mkdir -p /home/stephane/.composer && \
    chown -R stephane:stephane /home/stephane



# Everything after this point will run as $user user with a specific UID/GID

# php version
RUN php -v

# php modules
RUN php -m

WORKDIR /var/www/html/

EXPOSE 9000


#chmod -R 777 /var/www
