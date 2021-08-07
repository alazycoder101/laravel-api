

# Setup
```
curl -LO https://raw.githubusercontent.com/bitnami/bitnami-docker-laravel/master/docker-compose.yml
Finally launch the Laravel application development environment using:

$ docker-compose up
```

# Development
```
# list all artisan commands
docker-compose exec myapp php artisan list
# list routes
docker-compose exec myapp php artisan route:list
# make new controller 
docker-compose exec myapp php artisan make:controller UserController

```

.env file
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_password

## Models
php artisan make:model Article -m

```
composer install
php artisan migrate
php artisan db:seed
php artisan serve
```

# References
https://github.com/andrecastelo/example-api
https://hub.docker.com/r/bitnami/laravel/
