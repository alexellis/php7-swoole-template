FROM php:7.2

RUN pecl install swoole

RUN curl -sSL https://github.com/openfaas-incubator/of-watchdog/releases/download/0.4.2/of-watchdog > /usr/bin/fwatchdog \
    && chmod +x /usr/bin/fwatchdog

WORKDIR /root/

RUN echo "extension=swoole.so" | tee -a /usr/local/etc/php/conf.d/swoole.ini
COPY function   function
COPY index.php  index.php

ENV fprocess="php index.php"
ENV mode="http"
ENV upstream_url="http://127.0.0.1:9501"

CMD ["fwatchdog"]
