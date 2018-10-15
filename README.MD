# Getting Started

## Prerequisites

* PHP 7.1
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* Ctype PHP Extension
* JSON PHP Extension
* Composer
* A Linux environment is advisable

## Basic Installation

#### Install Laravel first

```shell
composer global require "laravel/installer"
```

#### Clone this project

```shell
git@github.com:jreys/library.git
```


## Usage

### Create the DB

Mysql example:
```mysql
mysql -u root
CREATE DATABASE laravel;
```

### Env file

Rename `.env.example` to `.env` and change the DB + User

### Migrate the tables and seed

```shell
cd ~/<path>/<to>/<this>/<project>
php artisan migrate
php artisan db:seed
```

### Run Laravel's dev server and click the link in the output

```shell
php artisan serve
```