# IMDb Clon
> The project's aim is to create a simplified version of the popular web IMDb by using the framework Laravel and mysql database.
> Live demo [_here_](https://imdb-clon.herokuapp.com/). <!-- If you have the project hosted somewhere, include the link here. -->

## Table of Contents
* [General Info](#general-information)
* [Technologies Used](#technologies-used)
* [Features](#features)
* [Setup](#setup)
* [Project Status](#project-status)
* [Room for Improvement](#room-for-improvement)
* [Acknowledgements](#acknowledgements)
* [Contact](#contact)
<!-- * [License](#license) -->


## General Information
- The project purpose is to create a fullstack web application using the technologies described down below. To complete the project was necessary to learn the laravel framework, the MVC architecture, relational databases and the container system that Docker provides.


## Technologies Used
- Php 8.1.0
- Laravel 9.0
- MySQL 8.0
- Docker 20.10.14
- Bootstrap 5


## Features
- Register, login, logout
- Search movies in the database
- Add movies to your personal watchlist
- Review movies


## Setup
Previous requirements:
- Docker
- Composer & Laravel

1. Mount the docker container with:
```
docker compose up
```
2. Attach shell and install laravel dependencies with:
```
composer install
```
3. Make or edit an .env file with the following variables inside:
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE= databaseName
DB_USERNAME=root
DB_PASSWORD=team2
```
4. Start the server with:
```
php artisan serve --host 0.0.0.0 --port 8000
```


## Project Status
Project is: _no longer being worked on_


## Room for Improvement
- Create several types of list (favorites, action, drama...)
- Filter movies by actor, category...
- Add Tv-shows


## Acknowledgements
- This project was inspired by IMDb


## Contact
Created by [@RicardoCastelbon](https://github.com/RicardoCastelbon) - feel free to contact me!

