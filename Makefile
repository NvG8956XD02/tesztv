build:
	docker-compose build --no-cache --force-rm
	docker exec laravel-docker bash -c "composer create-project laravel/laravel ."
	docker exec laravel-docker bash -c "find . -type f -exec chmod 644 {} \;"
	docker exec laravel-docker bash -c "find . -type d -exec chmod 755 {} \;"
	docker exec laravel-docker bash -c "php artisan storage:link"
	docker exec laravel-docker bash -c "chown -R www-data:www-data *"
stop:
	docker-compose stop
up:
	docker-compose up -d
composer-update:
	docker exec laravel-docker bash -c "composer update"
data:
	docker exec laravel-docker bash -c "php artisan migrate"
	docker exec laravel-docker bash -c "php artisan db:seed"
win-run:
	docker exec laravel-docker bash -c "composer update"
	cp .\my_laravel_app\.env.example .\my_laravel_app\.env
	docker exec laravel-docker bash -c "php artisan key:generate"