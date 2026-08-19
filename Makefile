.DEFAULT_GOAL := help

# Run PHP/Composer on the host when available; fall back to Docker container
PHP_BIN    := $(shell command -v php 2>/dev/null)
COMPOSER   := $(shell command -v composer 2>/dev/null)

ifdef PHP_BIN
    PHP := $(PHP_BIN)
else
    PHP := docker compose exec -T app php
endif

ifdef COMPOSER
    COMP := $(COMPOSER)
else
    COMP := docker compose exec -T app composer
endif

.PHONY: help up down restart logs shell build rebuild install dev test fresh optimize clean

help: ## Show this help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN{FS=":.*?## "};{printf "  \033[36m%-15s\033[0m %s\n", $$1, $$2}'

up: ## Start Docker containers (no rebuild)
	docker compose up -d

down: ## Stop Docker containers
	docker compose down

restart: ## Restart Docker containers
	docker compose restart

logs: ## Tail app logs
	docker compose logs -f app

shell: ## Shell into the app container
	docker compose exec app sh

rebuild: ## Rebuild and start Docker containers
	docker compose up -d --build

build: ## Build frontend assets (Vite)
	npm run build

dev: ## Start Vite dev server
	npm run dev

install: ## Install PHP and JS dependencies
	$(COMP) install
	npm install

test: ## Run the test suite
	$(PHP) artisan test

fresh: ## Migrate fresh and seed
	$(PHP) artisan migrate:fresh --seed

optimize: ## Cache config, routes, events, and views
	$(PHP) artisan config:cache
	$(PHP) artisan route:cache
	$(PHP) artisan event:cache
	$(PHP) artisan view:cache

clean: ## Clear all cached artifacts
	$(PHP) artisan optimize:clear