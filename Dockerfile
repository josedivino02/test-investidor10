FROM php:8.2-fpm

# Instalar dependências necessárias
RUN apt-get update && apt-get install -y \
    zip unzip curl git \
    default-mysql-client # Adicionado para o mysqladmin

# Extensão PHP para MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Limpar cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN git config --global --add safe.directory /var/www/html
