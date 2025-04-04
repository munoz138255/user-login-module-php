.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t docker-user-login-module-php .

build-container:
	docker run -dt --name docker-user-login-module-php -v .:/540/User-login-module-php docker-user-login-module-php
	docker exec docker-user-login-module-php composer install

start:
	docker start docker-user-login-module-php

test: start
	docker exec docker-user-login-module-php ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it docker-user-login-module-php /bin/bash

stop:
	docker stop docker-user-login-module-php

clean: stop
	docker rm docker-user-login-module-php
	rm -rf vendor