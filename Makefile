permissions:
	sudo setfacl -R -m u:"www-data":rwX -m u:`whoami`:rwX var/cache var/logs
	sudo setfacl -dR -m u:"www-data":rwX -m u:`whoami`:rwX var/cache var/logs

cache:
	bin/console cache:clear
