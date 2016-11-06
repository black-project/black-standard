init: permissions vendor

.PHONY: init

vendor: composer.lock
	composer install

composer.lock: composer.json
	composer update

permissions:
	sudo rm -Rf var/cache/* var/logs/*
	sudo setfacl -R -m u:"www-data":rwX -m u:`whoami`:rwX var/cache var/logs
	sudo setfacl -dR -m u:"www-data":rwX -m u:`whoami`:rwX var/cache var/logs

cache:
	bin/console cache:clear
