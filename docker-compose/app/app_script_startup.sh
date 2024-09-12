#!/bin/bash
echo "Running startup script..."
composer update
# Execute the original command
#exec "$@"
exec php-fpm
