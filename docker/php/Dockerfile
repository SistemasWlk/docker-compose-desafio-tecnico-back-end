FROM php:8.1.1-fpm

# Arguments
ARG user
ARG uid

# Instalando dependencias
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Limpando cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalando extenções PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd sockets

RUN apt-get update; \
    apt-get install -y libpq5 libpq-dev; \
    docker-php-ext-install pdo pdo_pgsql; \
    apt-get autoremove --purge -y libpq-dev; \
    apt-get clean ; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/
    
# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
#RUN composer -d /var/www/ install --no-interaction

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# For Laravel Installations
#RUN php /var/www/artisan key:generate

#RUN chown -R www-data:www-data /var/www

# Install redis
RUN pecl install -o -f redis \
    &&  rm -rf /tmp/pear \
    &&  docker-php-ext-enable redis

# Set working directory
WORKDIR /var/www

USER $user