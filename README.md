# Larave Simple Products/Reviews API

this project is a simple api i make to learn more about laravel API Resource and the auth Passport Library it's so simple just some products belong
to different users and each product has multiple reviews.

## Getting Started

this project built using Laravel 5.6 so make sure you have all this version dependencies then you can download the project and start cd to it

### Prerequisites

you need to run this command to install the project packages from the composer.json file
```
php artisan composer update
```

### Installing

To run the project you need to run some commands first in order to get the app up and running 

```
php artisan migrate
```
```
php artisan passport:install
```
```
php artisan db:seed
```
```
php artisan artisan:serve
```

now the project is up and running you can go to localhost:8000/api/products to view all products


## Built With

* [Laravel](https://laravel.com/) - The web framework used
* [Laravel Faker](https://github.com/fzaninotto/Faker) - Dependency Fake Data
* [Passport](https://laravel.com/docs/5.6/passport) - Used to authenticate api tokens


## Authors

* **Ahmed Mohamed** - *Initial work* - [ahmedmohamed1101140](https://github.com/ahmedmohamed1101140)


## Acknowledgments

* This Code not built for business it just my passion toward learning and discovering new technologies
* Inspiration from youtube tutorials 

