# About DigiiDex API

This project was created with Laravel and use the free API [DAPI](https://digimon-api.com/#docs). 

## First Steps

Make sure you have PHP installed on your computer, at least the version 8.1.0. You can install it with [XAMPP](https://www.apachefriends.org/es/index.html). You can verify you have PHP installed with:

### `php -v`

Make sure you have Composer installed on your computer. You can download the installer [here](https://getcomposer.org/download/). VYou can verify you have Composer installed with:

### `composer -v`

## Local Deploy

First, clone the repository
### `git clone https://github.com/domenica-jimenez/laravel-digimon-demo.git`

Open the project folder
### `cd laravel-digimon-demo`

Install dependencies
### `composer install`

Run service
### `php artisan serve`

## Local example

After deploy the project, if your port configuration is by default, you can go to [http://127.0.0.1:8000/api/digimon/1](http://127.0.0.1:8000/api/digimon/1) to get the response of the API.

## Information of the API

This API has two get requests.

1. To get a list of all digimons use: 

### `http://127.0.0.1:8000/api/digimons?pageSize={pageSize}&page={page}`

Where: 
- {pageSize}: It is the number of elements that the API will bring.
- {page}: It is the page where you will search for those items.

2. To get an specific digimon use: 

### `http://127.0.0.1:8000/api/digimon/{id}`

Where: 
- {id}: It is the number of the digimon that we are going to bring.
