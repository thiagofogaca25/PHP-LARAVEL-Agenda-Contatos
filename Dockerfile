FROM php:8.2-apache

# Instala dependências do sistema
RUN apt-get update && apt-get install -y \
    git zip unzip libzip-dev libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite

# Habilita o módulo rewrite do Apache (Laravel precisa)
RUN a2enmod rewrite

# Corrige o DocumentRoot do Apache para 'public'
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define diretório do app
WORKDIR /var/www/html

# Copia os arquivos da aplicação
COPY . .

# Instala dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# Permissões para cache e storage
RUN mkdir -p storage bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Expõe porta 80
EXPOSE 80

# Inicia o Apache
CMD ["apache2-foreground"]
