# Project Name
>  User Notifications 
Laracasts Laravel 5.7 from Scratch   Episode 33
See https://laracasts.com/series/laravel-from-scratch-2018/

## Table of contents
* [General info](#general-info)
* [Technologies](#technologies)
* [Setup](#setup)
* [Features](#features)
* [Status](#status)
* [Inspiration](#inspiration)

## General info
This code follows episode 33 of Laravel 5.7 from Scratch.  It is a simple SubscriptionRenewalFailed notification to introduce notifications in Laravel - uses the notifiable trait.

## Technologies
* Laravel Framework 5.7 or greater
* Database e.g. mysql
* Developed on local machine. Server requirements found at https://laravel.com/docs/5.7/#server-requirements

## Setup
* git clone https://github.com/lcmpembroke/Laravel_Scratch_Ep33_Notification_Example.git
* cd Laravel_Scratch_Ep33_Notification_Example
* composer install
* npm install
* cp .env.example .env
* php artisan key:generate
* edit the .env file ensuring correct database connections set up, 
* edit the .env file setting MAIL_DRIVER=log
* php artisan migrate
* php artisan db:seed	(populates users table in database with 10 users)
* php artisan serve

In browser:  
in http://localhost:8000/ - will see text "Done"  
http://localhost:8000/telescope/ - click on Mail and Notifications in side menu...see the SubscriptionRenewalFailed notification  

Check log file:  
/storage/logs/laravel-yyyy-mm-dd.log - see the markdown of the notification email  



## Code Examples


## Features


## Status
Project is: _finished_ as this part of the tutorial came to an end.

## Inspiration
Project inspired by a desire to learn in order to return to developer role having taken a career break to raise a family.
