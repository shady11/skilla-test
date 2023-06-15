## Инструкция по запуску

Установка зависимостей
```console
composer install
```

Копируем файл .env.example в .env
```console
cp .env.example .env
```

Подставляем свои значения для базы данных
```dotenv
DB_DATABASE=[database_name]
DB_USERNAME=[username]
DB_PASSWORD=[password]
```

Запуск миграций и заполнение примерными данными
```console
php artisan migrate --seed
```

Запуск проекта
```console
php artisan serve
```

Через маршрут /api/login методом POST, используя email и пароль для примерного пользователя, генерируем токен.

Дальше копируем его и вставляем в welcome.blade.php
```js
const token = '<token>';
```

Так же в этом файле задаем промежуток дат(start_date, end_date) и значение filter_field для фильтра.
```js
const startDate = '<YYYY-MM-DD>';
const endDate = '<YYYY-MM-DD>';
const filterField = '<целое число>';
```
