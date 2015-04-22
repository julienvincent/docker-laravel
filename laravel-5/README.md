## PHP Dockerfile


This repository contains **Dockerfile** of [PHP](http://php.net/) for [Docker](https://www.docker.com/)'s [automated build](https://registry.hub.docker.com/u/julienvincent/nginx-php/) published to the public [Docker Hub Registry](https://registry.hub.docker.com/) set up for [Laravel 5](http://laravel.com/).


### Base Docker Image

* [julienvincent/nginx](https://registry.hub.docker.com/u/julienvincent/nginx-php/)


### Installation

1. Install [Docker](https://www.docker.com/).

2. Download [automated build](https://registry.hub.docker.com/u/julienvincent/laravel/) from public [Docker Hub Registry](https://registry.hub.docker.com/): 'docker pull julienvincent/laravel'

   (alternatively, you can build an image from Dockerfile: 'docker build -t="julienvincent/laravel" github.com/julienvincent/docker-laravel'`')


### Usage

    docker run -d -p 80:80 julienvincent/laravel

#### Attach persistent/shared directories

    docker run -d -p 80:80 -v <sites-enabled-dir>:/etc/nginx/sites-enabled -v <certs-dir>:/etc/nginx/certs -v <log-dir>:/var/log/nginx julienvincent/laravel

After few seconds, open `http://<host>` to see the welcome page.
