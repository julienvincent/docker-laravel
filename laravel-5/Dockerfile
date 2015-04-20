#
# Laravel Dockerfile
#
# https://github.com/julienvincent/Dockerfiles/laravel/5
#

FROM julienvincent/nginx-php
MAINTAINER Julien Vincent "julienlucvincent@gmail.com"

# Add configs
COPY container/default.conf /etc/nginx/conf.d/default.conf
COPY container/index.php /data/www/index.php

# Container Config
CMD ["php", "artisan"]
EXPOSE 80 443