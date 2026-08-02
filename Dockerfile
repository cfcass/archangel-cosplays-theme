# Use official WordPress image with PHP and Apache
FROM wordpress:latest

# Install additional PHP extensions if needed
RUN docker-php-ext-install -j$(nproc) mysqli

# Copy theme files to WordPress themes directory
COPY . /var/www/html/wp-content/themes/archangel-cosplays/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/archangel-cosplays/
RUN chmod -R 755 /var/www/html/wp-content/themes/archangel-cosplays/

# Expose port
EXPOSE 80
