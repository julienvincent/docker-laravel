#
# Laravel Dockerfile
#
# https://github.com/julienvincent/docker-laravel/laravel-5
#

FROM julienvincent/nginx-hhvm
MAINTAINER Julien Vincent "julienlucvincent@gmail.com"

# Add configs

COPY container/default.conf /etc/nginx/conf.d/default.conf
COPY container/index.php /data/www/public/index.php

# Container Config

VOLUME ["/data/www"]
EXPOSE 80 443