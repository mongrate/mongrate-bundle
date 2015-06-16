[![Build Status](https://travis-ci.org/amyboyd/mongrate-bundle.svg?branch=master)](https://travis-ci.org/amyboyd/mongrate-bundle)
[![Code Coverage](https://scrutinizer-ci.com/g/amyboyd/mongrate-bundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/amyboyd/mongrate-bundle/?branch=master)

Mongrate Bundle
===============

A Symfony bundle for [Mongrate](https://github.com/amyboyd/mongrate).

Available Commands:

- [GenerateMigration](#generatemigration-command)
- [List](#list-command)
- [Test](#test-command)
- [Up](#up-command)
- [Down](#down-command)
- [ToggleMigration](#togglemigration-command)

Installation
============

Mongrate Bundle is available [via Composer](https://packagist.org/packages/amyboyd/mongrate-bundle).

```sh
composer require "amyboyd/mongrate"
```

Set your configuration in your Symfony application's config.yml:

```yml
mongrate:
    mongodb_server: 'mongodb://localhost:27017'
    mongodb_db: my_database
    migrations_directory: "%kernel.root_dir%/../migrations"
```

As always, you can use settings from `parameters.yml` with `%...%`. For example:

```yml
mongrate:
    mongodb_server: %mongodb_server%
    mongodb_db: %mongodb_db%_prod
```

Usage
=====

See the commands available by running

```sh
app/console list mongrate
```


## GenerateMigration Command

Generate a base migration backbone.

```sh
app/console mongrate:generate-migration <migration-name>
```

## List Command

List all migrations and its statuses that indicates if the migrations was already applyed or not.

```sh
app/console mongrate:list-migrations
```

## Test Command

Allow you to test your migrations up and down.

```sh
app/console mongrate:test <up|down> <migration-name>
```

## Up Command

Apply your `up` migration.

```sh
app/console mongrate:up <migration-name>
```

## Down Command

Apply your `down` migration that should rollback to previous state before applyed `up` migration.

```sh
app/console mongrate:down <migration-name>
```

## Toggle Command

Toggle a migration `up` or `down`.

```sh
app/console mongrate:toggle <migration-name>
```


Contributing
============

Please submit pull requests on GitHub:
* [MongrateBundle](https://github.com/amyboyd/mongrate-bundle/pulls)
* [Mongrate](https://github.com/amyboyd/mongrate/pulls)

Install [PHP-CS-Fixer](https://github.com/fabpot/PHP-CS-Fixer):

```sh
sudo curl http://get.sensiolabs.org/php-cs-fixer.phar -o /usr/local/bin/php-cs-fixer
```

Install the Git pre-commit hook:

```sh
ln -s ../../resources/pre-commit .git/hooks/pre-commit
chmod a+x .git/hooks/pre-commit
```
