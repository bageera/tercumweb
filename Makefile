up:
	docker compose up -d --build

down:
	docker compose down

logs:
	docker compose logs -f app

shell:
	docker compose exec app sh

artisan:
	docker compose exec app php artisan $(cmd)

composer:
	docker compose exec app composer $(cmd)

