

# Setup
```
curl -LO https://raw.githubusercontent.com/bitnami/bitnami-docker-laravel/master/docker-compose.yml
Finally launch the Laravel application development environment using:

$ docker-compose up
# goto http://0.0.0.0:3000
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

## Database Seeding
php artisan make:seeder ArticlesTableSeeder

## Routes

## Controller
php artisan make:controller ArticleController

```
composer install
php artisan migrate
php artisan db:seed
php artisan serve
```

## API
### HTTP Status
200: OK. The standard success code and default option.
201: Object created. Useful for the store actions.
204: No content. When an action was executed successfully, but there is no content to return.
206: Partial content. Useful when you have to return a paginated list of resources.
400: Bad request. The standard option for requests that fail to pass validation.
401: Unauthorized. The user needs to be authenticated.
403: Forbidden. The user is authenticated, but does not have the permissions to perform an action.
404: Not found. This will be returned automatically by Laravel when the resource is not found.
500: Internal server error. Ideally you're not going to be explicitly returning this, but if something unexpected breaks, this is what your user is going to receive.
503: Service unavailable. Pretty self explanatory, but also another code that is not going to be returned explicitly by the application.

## Authentication
php artisan make:migration --table=users adds_api_token_to_users_table

## Docker
https://github.com/yemiwebby/laravel-docker

# References
https://www.toptal.com/laravel/restful-laravel-api-tutorial
https://github.com/andrecastelo/example-api
https://hub.docker.com/r/bitnami/laravel/
https://www.toptal.com/api-developers/5-golden-rules-for-designing-a-great-web-api
https://www.twilio.com/blog/get-started-docker-laravel
https://github.com/yemiwebby/laravel-docker
https://laravel.com/docs/8.x/sail
https://laravel.com/docs/8.x/authentication
https://laravel.com/docs/8.x/hashing
