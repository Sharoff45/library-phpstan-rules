<!--- BEGIN HEADER -->
# Changelog

All notable changes to this project will be documented in this file.
<!--- END HEADER -->

## [2.1.0](https://gitlab.int.tsum.com/ag/libraries/library-phpstan-rules/compare/2.0.1...2.1.0) (2022-05-17)


### Features


##### AG-6747

* добавлены новые правила ([de1d3f](https://gitlab.int.tsum.com/ag/libraries/library-phpstan-rules/commit/de1d3f999ae819e7d9f4479d951bb1b153d7837d))

---

## [2.0.1](https://gitlab.int.tsum.com/ag/libraries/library-phpstan-rules/compare/2.0.0...2.0.1) (2022-03-30)


---

## [2.0.0](https://gitlab.int.tsum.com/ag/libraries/library-phpstan-rules/compare/1.10.0...2.0.0) (2022-01-20)


### ⚠ BREAKING CHANGES


##### AG-6162

* Phpstan обновлен на версию 1.4, остальные зависимости на актуальные ([07907d](https://gitlab.int.tsum.com/ag/libraries/library-phpstan-rules/commit/07907d7221d312ced623efd9bc896b93c8213a4b))

---

## [1.10.0](https://gitlab.int.tsum.com/ag/libraries/library-phpstan-rules/compare/1.9.0...1.10.0) (2021-10-05)


### Features


##### AG-5021

* Добавлено общие исключение для *Action ([9f2c2a](https://gitlab.int.tsum.com/ag/libraries/library-phpstan-rules/commit/9f2c2a8774cf4850baa36f6cea99fd2dd4f80557))

---

## [1.9.0](https://gitlab.int.tsum.com/ag/libraries/library-phpstan-rules/compare/1.8.1...1.9.0) (2021-08-05)


### Features


##### AG-4566

* Подключен library-git-hooks ([63f931](https://gitlab.int.tsum.com/ag/libraries/library-phpstan-rules/commit/63f931027bb1ae6d6ee73e093e507ba78d6d45ae))

---

## [1.8.1](https://gitlab.int.tsum.com/ag/libraries/library-phpstan-rules/compare/1.8.0...1.8.1) (2021-08-03)


---

## [1.8.0](https://gitlab.int.tsum.com/ag/libraries/library-phpstan-rules/compare/1.7.1...1.8.0) (2021-06-29)


### Features


##### AG-3881

* подключен composer-unused и удалены лишние зависимости ([e1e63b](https://gitlab.int.tsum.com/ag/libraries/library-phpstan-rules/commit/e1e63b98f501b69782f51316a5ed04bba947376e))

---

## [1.7.1](https://gitlab.int.tsum.com/ag/libraries/library-phpstan-rules/compare/1.7.0...1.7.1) (2021-06-24)


---

## [1.7.0](https://gitlab.int.tsum.com/ag/libraries/library-phpstan-rules/compare/1.6.0...1.7.0) (2021-03-18)


### Features

* подключил changelog-generator и cghooks ([79fc1b](https://gitlab.int.tsum.com/ag/libraries/library-phpstan-rules/commit/79fc1baee014cea8fbd81a05fd2b1c7d7f4568ab))

---

## Версия 1.6.0
Добавлена поддержка PHP 8.0

## Версия 1.5.2
Исправлен конфиг для контроллера

## Версия 1.5.1
Исправлена проблема с множественным подключением конфига

## Версия 1.5.0
- Добавил в игнор несколько сообщений для тестов
- добавил symfony-controller-extension.neon

## Версия 1.4.0
* Отключить правило checkAlwaysTrueCheckTypeFunctionCall
* Добавлено правило AssignVariableInReturnRule

## Версия 1.3.4
Обновлен gitlab-ci

## Версия 1.3.3
Подключен packagist.int.tsum.com

## Версия 1.3.2
Исправление в phpunit.xml

## Версия 1.3.1
В конфиги добавлена степень анализа и указаны явно директории для анализа для возможности запуска phpstan без параметров

## Версия 1.3.0
Добавлено:
* правила PhpdocNotNeededRule и VariableInConditionRule
* тесты

## Версия 1.2.0
Добавлено правило UnusedVariableRule

## Версия 1.1.1
Symfony: src/Kernel.php добавлен в игнор

## Версия 1.1.0
Добавлены новые правила:
* phpstan/phpstan-strict-rules
* pepakriz/phpstan-exception-rules

Другие изменения:
* добавлен пример конфига

## Версия 1.0.2
Переименованы конфиги

## Версия 1.0.1
Исправление в composer.json

## Версия 1.0.0
Правила вынесены в отдельный пакет
