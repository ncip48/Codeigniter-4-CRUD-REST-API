# Codeigniter 4 REST API CRUD

## 1. Installation
### 1.1 Change your database information in .env file
> database.default.hostname = localhost
> database.default.database = pegawai
> database.default.username = root
> database.default.password = 
> database.default.DBDriver = MySQLi

### 1.2 Run migrate database
```sh
$ php spark migrate
```
### 1.3 Run seeder 
```sh
$ php spark db:seed UserSeeder
```

### 1.4 Run Server
```sh
$ php spark serve
```
## 2. How to access rest API
by default url is http://localhost:8080

| METHOD | URL | Details | Body JSON
| ------ | ------ | ------ | ------ | 
| GET | /users | Get all users | -
| GET | /users/:id | Get users by id | -
| POST | /users/create | Create users with given value | `{"username":"your username", "password":"your password", "email":"your email", "first_name":"your first name", "last_name":"your last name", "address":"your address"}`|
| PATCH | /users/:id | Update one or more value in selected id | `{"username":"your username", "password":"your password", "email":"your email", "first_name":"your first name", "last_name":"your last name", "address":"your address"}`
| PUT | /users/:id | Update all value in selected id | `{"username":"your username", "password":"your password", "email":"your email", "first_name":"your first name", "last_name":"your last name", "address":"your address"}`
| DELETE | /user/:id | Delete the user based on id given | -

