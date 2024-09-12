#!/bin/bash
echo "Running startup script..."
composer update && php artisan migrate
# Execute the original command
#exec "$@"
exec php-fpm
