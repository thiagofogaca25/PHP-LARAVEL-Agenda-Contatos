FROM php:8.2-apache

# Instala dependências
RUN apt-get update && apt-get install -y \
    git zip unzip libzip-dev libonig-dev libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite mbstring zip \
    && a2enmod rewrite

# Copia o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define diretório de trabalho
WORKDIR /var/www/html

# Copia arquivos
COPY . .

# Instala dependências
RUN composer install --no-dev --optimize-autoloader

# Permissões para Laravel
RUN chown -R www-data:www-data storage bootstrap/cache

# Expõe a porta
EXPOSE 80

# Inicia o Apache
CMD ["apache2-foreground"]
