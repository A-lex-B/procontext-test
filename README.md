### Тестовое задание
В данном проекте реализовано небольшое REST API сервиса коротких ссылок: пользователь присылает длинный URL, получает короткий код, по короткому коду — редирект на оригинальный URL. Также есть метод со статистикой переходов.  
Документация по эндпойнтам API находится в папке `/public/docs`.

#### Системные требования
- PHP 8.2 или 8.3
- СУБД MariaDB 10.10+, MySQL 5.7+, PostgreSQL 11.0+, SQLite 3.8.8+ или SQL Server 2017+
- Composer

#### Установка и запуск
1. Клонируйте репозиторий:  
`git clone https://github.com/A-lex-B/procontext-test.git`  
`cd procontext-test`

2. Установите Laravel:  
`composer install`

3. Создайте файл окружения:  
`cp .env.example .env`

4. Создайте базу данных и укажите параметры подключения к ней в файле .env по примеру:  
`DB_CONNECTION=mysql`  
`DB_HOST=127.0.0.1`  
`DB_PORT=3306`  
`DB_DATABASE=my_database`  
`DB_USERNAME=my_username`  
`DB_PASSWORD=my_password`

5. Сгенерируйте ключ приложения:  
`php artisan key:generate`

6. Запустите миграции:  
`php artisan migrate`

7. Запустите локальный сервер:  
`php artisan serve --port=80`

Проект будет доступен по адресу `http://localhost`. Документация - по адресу `http://localhost/public/docs`.
