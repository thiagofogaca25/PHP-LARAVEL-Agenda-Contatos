FROM php:8.2-apache

# Instala extensões necessárias
RUN apt-get update && apt-get install -y \
    git zip unzip libzip-dev libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define o diretório do projeto
WORKDIR /var/www/html

# Copia os arquivos do projeto
COPY . .

# Instala dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# Permissões
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Corrige Apache para servir a pasta "public"
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Expõe a porta
EXPOSE 80

# Usa o Apache por padrão
CMD ["apache2-foreground"]
