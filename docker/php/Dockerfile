FROM php:7.2-fpm-alpine

LABEL maintainer="piotrpikula@gmail.com"

ENV TZ=Europe/Warsaw

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN printf '[PHP]\ndate.timezone = "'${TZ}'"\n' > /usr/local/etc/php/conf.d/tzone.ini

