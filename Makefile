test-phpcs:
	docker run --rm --platform linux/amd64 -v $(PWD):/data cytopia/php-cs-fixer fix --dry-run --diff src
