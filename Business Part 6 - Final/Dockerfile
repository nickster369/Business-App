FROM php:8.2-apache

# Install MySQL and database extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache URL rewriting (for .htaccess support)
RUN a2enmod rewrite

# Copy your code into Apache's web folder
COPY . /var/www/html/

# Tell Render to route traffic to port 80
EXPOSE 80
