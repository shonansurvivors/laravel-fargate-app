#!/bin/bash

set -eu

php artisan config:cache

php-fpm
