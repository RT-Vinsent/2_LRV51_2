# Домашняя работа LRV №1.

# Задание 3. Установка Laravel

## Требования

- В домашнем задании должна быть использовать последняя актуальная (на момент выполнения) версия фреймворка.

## Предыстория

В предыдущем задании вы настроили окружение и установили composer, теперь время начать работать с Laravel
и положить первый кирпичик в свое приложение :)

## Техническое задание

Учимся создавать проект с нуля.

**Обратите внимание:** Вы должны развернуть последнюю актуальную версию фреймворка Laravel.

### Порядок действий

1. Установите Laravel (инструкции вы найдете в первом задании) и создайте свой проект;
2. Настройте стандартный файл конфигурации `.env.example` (обратите внимание, что это файл настроек по умолчанию из которого создаётся файл переменных окружения `.env`);
    * установите соответствующее название проекта в `APP_NAME`;
    * установить окружение в режим отладки (позже мы изучим, как работает эта панель) в `APP_DEBUG`;
3. Изучите структуру созданного проекта (инструкции и описания также есть в первом задании);
4. Запустите проект с помощью **php artisan serve**, чтобы по http://localhost:8000 отдавалась дефолтная страница проекта.

### Ответьте на вопросы

1. Перечислите список composer-пакетов, которые использует фреймворк Laravel после установки.
2. Изучите директорию `config` и опишите какие файлы хранятся в этой директории.
3. В какой директории хранятся основные файлы (классы) с бизнес-логикой приложения?

### Результат

Результатом выполнения задания должна быть ссылка на репозиторий с созданным Laravel-проектом. Ответы на вопросы должны быть указаны в `README.md` файле.

### Собственно сам результат:

1. Laravel использует множество пакетов, установленных через Composer. Для полного списка пакетов в проекте Laravel, можно выполнить команду `composer show` в корневой директории проекта. Вот некоторые из них:
   - `laravel/framework`: фреймворк Laravel со всеми его основными компонентами и библиотеками.
   - `fideloper/proxy`: обработка HTTP прокси заголовков.
   - `fruitcake/laravel-cors`: поддержка CORS.
   - `guzzlehttp/guzzle`: клиент для HTTP запросов.
   - `laravel/tinker`: интерактивная консоль.
   - `mockery/mockery`: мокинг для тестов.
   - `nunomaduro/collision`: улучшенные сообщения об ошибках для PHPUnit.
   - `phpunit/phpunit`: стандартный фреймворк для тестирования PHP.

2. В директории `config` хранятся конфигурационные файлы, контролирующие различные аспекты Laravel приложения:
   - `app.php` - основные настройки приложения.
   - `auth.php` - настройки аутентификации.
   - `cache.php` - настройки кеширования.
   - `database.php` - настройки подключения к базам данных.
   - `filesystems.php` - настройки файловых систем и облачного хранения.
   - `logging.php` - конфигурация логирования.
   - `mail.php` - настройки почтовых отправлений.
   - `queue.php` - настройки очередей.
   - `services.php` - настройки API-ключей и сервисов сторонних провайдеров.
   - `session.php` - настройки сессий.

3. Основные файлы бизнес-логики в Laravel находятся в `app/`, включая:
   - `app/Http/Controllers` для классов обработки HTTP-запросов.
   - `app/Models` для моделей данных и бизнес-правил.
   - `app/Providers` для сервис-провайдеров с дополнительной логикой.

---

<details>
  <summary>Дефолтный README.md</summary>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

</details>
