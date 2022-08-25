#!/bin/bash 

app = "wp2"
prefix = "wp2_"
title = "Mon Wordpress 2"
admin = "admin"
email = "benoitsacleux@outlook.fr"
# Dl 
wp core download --locale=fr_FR

# config
wp config create --dbname=$app --dbuser=$app --dbhost=127.0.0.1 --dbprefix=$prefix --prompt=dbpass

# install
wp core install --url=$app.local --title=$title --admin_user=$admin --admin_email=$email --prompt=admin_password