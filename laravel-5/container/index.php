<!DOCTYPE html>
<html>
<title>alexisvincent/nginx.hhvm</title>
<xmp theme="united" style="display:none;">
## PHP Dockerfile


This repository contains **Dockerfile** of [PHP](http://php.net/) for [Docker](https://www.docker.com/)'s [automated build](https://registry.hub.docker.com/u/julienvincent/nginx-php/) published to the public [Docker Hub Registry](https://registry.hub.docker.com/).


### Base Docker Image

* [julienvincent/nginx](https://registry.hub.docker.com/u/julienvincent/nginx/)


### Installation

1. Install [Docker](https://www.docker.com/).

2. Download [automated build](https://registry.hub.docker.com/u/julienvincent/nginx-php/) from public [Docker Hub Registry](https://registry.hub.docker.com/): 'docker pull julienvincent/nginx-php'

(alternatively, you can build an image from Dockerfile: 'docker build -t="julienvincent/nginx-php" github.com/julienvincent/docker-nginx-php'`')


### Usage

docker run -d -p 80:80 julienvincent/nginx-php

#### Attach persistent/shared directories

docker run -d -p 80:80 -v <sites-enabled-dir>:/etc/nginx/sites-enabled -v <certs-dir>:/etc/nginx/certs -v <log-dir>:/var/log/nginx julienvincent/nginx-php

After few seconds, open `http://<host>` to see the welcome page.

</xmp>

<script src="http://strapdownjs.com/v/0.2/strapdown.js"></script>
</html>