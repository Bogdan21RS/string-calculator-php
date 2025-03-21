.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t stringcalculator .

build-container:
	docker run -dt --name stringcalculator -v .:/540/string-calculator-php stringcalculator
	docker exec stringcalculator composer update
	docker exec stringcalculator composer install

start:
	docker start stringcalculator

test: start
	docker exec stringcalculator ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it stringcalculator /bin/bash

stop:
	docker stop stringcalculator

clean: stop
	docker rm stringcalculator
	rm -rf vendor
