FROM composer:1.10.9

WORKDIR /src/app_carrinho_compras
RUN composer install

WORKDIR /src/app_carrinho_compras_b
RUN composer install

RUN file="$(ls -1 /tmp/dir)" && echo $file