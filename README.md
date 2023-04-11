## Movie-Quote App

The movie-Quote app consists of two pages. The first landing page displays a randomly selected quote along  with an image and a related movie title, Clicking on the movie title takes you to a second page where all the quotes from that movie are listed.
The app includes an admin panel that allows signed-in administrators to manage movies and quotes. They can add new movies and quotes, as well as edit and delete existing ones.


## Table of Contents
- Prerequisites
- Tech Stack
- Getting Started
- Migration
- Development
- Database diagram 


## Prerequisites
- PHP@8.2 and up
- MYSQL@8 and up
- npm@9.5 and up
- composer@2 and up

## Teck stack
- Laravel@10.5 - back-end framework
- Spatie Translatable - package for translation


## Getting started
1. First you need to clone Movie-Quote repository from github
```bash
https://github.com/RedberryInternship/mariam-revia-movie-quotes.git
```
2. Next run composer install in order to install all the dependencies.
```bash
composer install
```
3. Install all the JS dependencies:
```bash
npm install
```
and also 
```bash
npm run dev
```
4. Now we need to set our env file. Go to the root of your project and execute this command.
```bash
cp .env.example .env
```

You should also provide .env file all the necessary environment variables:
 
 ## MYSQL

 >DB_CONNECTION=mysql

 >DB_HOST=127.0.0.1

 >DB_PORT=3306

 >DB_DATABASE=*****

 >DB_USERNAME=*****

 >DB_PASSWORD=*****

5. Execute following in root of your project
```bash
  php artisan key:generate
```
this generates auth key

## Migration
Then migrating database
```bash
php artisan migrate
```
## Development
Run Laravel's built-in development server by executing:
```bash
 php artisan serve
 ```
On JS you may run:
```bash
 npm run dev
  ```

 ## Database diagram 

![diagram](https://i.ibb.co/wStGLww/draw-SQL-movie-quotes-export-2023-04-11-1.png)
 
