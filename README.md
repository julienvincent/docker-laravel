# Nginx Dockerfile

This repository contains an automated **Dockerfile** of [julienvincent/nginx-hhvm](https://registry.hub.docker.com/u/julienvincent/nginx-hhvm/) or [julienvincent/nginx-php](https://registry.hub.docker.com/u/julienvincent/nginx-php/) and is setup to work with laravel 5

## Supported tags

+ `latest` alias for :hhvm
+ `php`
+ `hhvm`

### Base Docker Image

* [julienvincent/nginx-hhvm](https://registry.hub.docker.com/u/julienvincent/nginx-hhvm/)

or

* [julienvincent/nginx-php](https://registry.hub.docker.com/u/julienvincent/nginx-php/)

### Usage

    docker run --name laravel -v /some/content:/data/www -d julienvincent/laravel
    
### Github

+ [https://github.com/julienvincent/docker-laravel](https://github.com/julienvincent/docker-laravel)