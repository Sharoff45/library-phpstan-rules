composer:

    composer require --dev sharoff45/library-phpstan-rules

Создайте в корне проекта файл phpstan.neon со следующим содержимым:

    includes:
      - vendor/sharoff45/library-phpstan-rules/general-extension.neon
    #  - vendor/sharoff45/library-phpstan-rules/symfony-extension.neon  # раскомментировать, если используется symfony
    #  - vendor/sharoff45/library-phpstan-rules/symfony-controller-extension.neon  # раскомментировать, если нужны правила для контроллеров
    #  - vendor/sharoff45/library-phpstan-rules/phpunit-extension.neon  # раскомментировать, если используется phpunit

или скопируйте его из примера:

    cp ./vendor/sharoff45/library-phpstan-rules/phpstan.example ./phpstan.neon

# Использование

    bin/phpstan analyse
