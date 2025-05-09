FROM php:8.2-apache

# Instala extensões PHP necessárias para Laravel
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libzip-dev \
    libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite \
    && apt-get clean

# Habilitar o mod_rewrite do Apache (necessário para Laravel)
RUN a2enmod rewrite

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define diretório do app
WORKDIR /var/www/html

# Copia os arquivos da aplicação
COPY . .

# Instala dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# Configura permissões adequadas para o Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Gera a chave da aplicação Laravel
RUN php artisan key:generate

# Exponha a porta 80 para acesso ao Apache
EXPOSE 80

# Configura o Apache para servir a aplicação
CMD ["apache2-foreground"]
