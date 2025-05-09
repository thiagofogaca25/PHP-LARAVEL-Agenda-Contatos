FROM php:8.2-apache

# Instala extensões do PHP necessárias para Laravel
RUN apt-get update && apt-get install -y \
    git zip unzip libzip-dev libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define diretório do app
WORKDIR /var/www/html

# Copia os arquivos da aplicação
COPY . .

# Instala dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# Define permissões
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Gera chave do Laravel
RUN php artisan key:generate

# Expõe a porta
EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80", "-t", "public"]
