## Employee Salary System(ESS)

## How to Install

Run the following commands in composer: 

```
- git clone https://gitlab.com/sihabcse21/employee-salary-sheets.git

- composer install
```

Add a `.env` file and config your database connection. And finally:

```
- composer dump-autoload

- php artisan key:generate

- php artisan migrate

- php artisan db:seed
```

## Default User
 - email: admin@admin.com
 - password: 123456
