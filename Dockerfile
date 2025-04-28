# Use an official PHP runtime as a parent image
FROM php:8.1-apache

# Copy application code to the container
COPY . /var/www/html

# Install required PHP extensions (if needed)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Expose the default web server port
EXPOSE 80
