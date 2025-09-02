#!/bin/bash

# build.sh
echo "Starting Laravel build process for Vercel..."

# Install dependencies
composer install --no-dev --optimize-autoloader

# Generate app key if not set
php artisan key:generate --force

# Clear and cache config for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create storage directories if they don't exist
mkdir -p storage/logs
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views

# Set proper permissions
chmod -R 775 storage
chmod -R 775 bootstrap/cache

echo "Laravel build process completed!"
