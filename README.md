# Clickhouse DB migrations for Laravel

ClickHouse is an open source column-oriented database management system capable of real time generation of analytical data reports using SQL queries.
Library is suitable for Laravel.

## Installing

```bash
composer require sagirba/clickhouse-migrations
```

## Usage

### Configure /config/database.php

Example for clickhouse and migrations settings:

```php
...
'clickhouse' => [
    'host' => env('CLICKHOUSE_HOST', 'localhost'),
    'port' => env('CLICKHOUSE_PORT', 8123),
    'username' => env('CLICKHOUSE_USER', 'default'),
    'password' => env('CLICKHOUSE_PASSWORD', ''),
    'options' => [
        'database' => env('CLICKHOUSE_DATABASE', 'default'),
        'timeout' => 1,
        'connectTimeOut' => 2,
    ],
],
'clickhouse-migrations' => [
    'dir' => env('CLICKHOUSE_MIGRATION_DIR', '/database/clickhouse-migrations/'),
    'table' => env('CLICKHOUSE_MIGRATION_TABLE_NAME', 'migrations'),
],
    ...
```

### Register provider

```php
'providers' => [
    ...
    \Sagirba\ClickhouseMigrations\ClickhouseProvider::class,
    ...
],
```

## Usage

### Create new migration

```bash
php artisan clickhouse:migration:create {name}
```

### Up migrations

```bash
php artisan clickhouse:migrate
```

### Down last migration

```
php artisan clickhouse:migrate --down
```

## Built With

* https://github.com/smi2/phpClickHouse - PHP ClickHouse wrapper
