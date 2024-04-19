# Домашняя работа LRV №2.

# Задание 2. Создать приложение для ведения учебных групп

В этом домашнем задании, мы закрепим изученный материал и создадим простое приложение для работы с учебными группами и студентами.

## Требования

- В домашнем задании должна быть использовать последняя актуальная (на момент выполнения) версия фреймворка.

## Напоминание

Для удобства можно использовать проект, созданный в домашнем задании №1, но использовать для этого другую ветку.

Используйте корректные названия для коммитов и при внесении правок создавайте новый коммит вместо удаления проекта.

## Темы для закрепления

- Настройка и работы с базами данных
- Создание миграций
- Работа с Eloquent моделями и отношениями
- Работа с запросами
- Работа с шаблонизатором Blade

## Задание

### 1. Настройка конфигурации БД
Настроить конфигурацию приложения для работы с **SQLite** и создать файл `database\database.sqlite`.

### 2. Создание миграций для базы данных и моделей
С помощью **artisan** сгенерировать модели и миграции для таблиц **groups** и **students**.

Пример структуры для сущности `Group`:
```php
[
    'id' => 1,
    'title' => 'Группа FS-01', // Название группы
    'start_from' => '2023-01-10', // Дата начала обучения
    'is_active' => true, // Начала ли группа своё обучение
    'created_at' => '2023-01-01 10:00:00',
    'updated_at' => '2023-01-01 10:00:00',
]
```

Пример структуры для сущности `Student`:
```php
[
    'id' => 1,
    'group_id' => 1, // ID группы
    'surname' => 'Петров', // Фамилия студента
    'name' => 'Иван', // Имя студента
    'created_at' => '2023-01-01 10:00:00',
    'updated_at' => '2023-01-01 10:00:00',
]
```

Типы данных привести в соответствие с хранимой информацией.

### 3. Настройка отношений
Для моделей `Group` и `Studen` задать соответствующие отношения (в группе может быть множество студентов, но у каждого студента может быть только одна группа).

### 4. Настройка ресурсных контроллеров
С помощью **artisan** сгенерировать ресурсный контроллер для работы с моделями `Group` и `Student`.

### 5. Добавление логики для маршрутов ресурсного контроллера
Реализуйте логику в методах контроллера и blade-шаблоны в соответствии с требованиями, указанными в таблице:

| Метод | Маршрут                              | Описание                                                                 | Примечание                                                      |
|-------|--------------------------------------|--------------------------------------------------------------------------|-----------------------------------------------------------------|
| GET   | `/groups`                            | Отображает список всех групп                                             | Должна отображаться ссылка на страницу создания новой группы    |
| GET   | `/groups/create`                     | Отображает страницу для создания новой группы                            | -                                                               |
| POST  | `/groups`                            | Создаёт новую группу                                                     | После создания перенаправлять на список групп                   |
| GET   | `/groups/{group}`                    | Отображает информацию по выбранной группе и список студентов этой группы | Должна отображаться ссылка на страницу создания нового студента |
| GET   | `/groups/{group}/students/create`    | Отображает страницу для добавления студента в группу                     | -                                                               |
| POST  | `/groups/{group}/students`           | Создаёт студента для группы                                              | После создания перенаправлять на страницу группы                |
| GET   | `/groups/{group}/students/{student}` | Отображает информацию о студенте                                         | -                                                               |

Для отображения используйте `blade`-шаблоны. На страницах просмотра нужно отображать всю информацию из базы данных.
Для удобства рекомендуется реализовать также ссылки для навигации (назад).

## Вопросы

Также, в файле `README.md` добавьте ответы на следующие вопросы:
1. Для чего нужны миграции? Какую роль они играют или какую проблему решают?
2. Для чего нужен Eloquent ORM? 

## Результат

Результатом работы должна стать ссылка на репозиторий с выполненным заданием и ответами на вопросы в файле README.md

## Ответы на вопросы:

1. Миграции — это как инструкции для сборки мебели: они говорят базе данных, как строить и изменять таблицы, чтобы всем в команде было удобно работать. Это удобно, потому что можно легко добавлять изменения или возвращать все обратно, если что-то идет не по плану.

2. Eloquent ORM это как переводчик между нами и базой данных. Он позволяет общаться с базой, используя объекты и классы, как будто это обычные части нашего кода, а не сложные SQL-запросы. Это делает код проще, понятнее и безопаснее.

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
