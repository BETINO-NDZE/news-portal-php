# Dockerfile

# Use an official PHP image with Apache
FROM php:8.2-apache

# Install extensions for PostgreSQL
RUN docker-php-ext-install pdo pdo_pgsql

# Copy your app files into the container
COPY . /var/www/html/

# Set permissions (optional)
RUN chown -R www-data:www-data /var/www/html/

# Expose the default Apache port
EXPOSE 80
