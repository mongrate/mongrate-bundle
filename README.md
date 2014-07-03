Mongrate Bundle
===============

A Symfony bundle for [Mongrate](https://github.com/amyboyd/mongrate).

Installation
============

Mongrate Bundle is available [via Composer](https://packagist.org/packages/amyboyd/mongrate-bundle).

Set your configuration in your Symfony application's config.yml:

    mongrate:
        mongodb_server: 'mongodb://localhost:27017'
        mongodb_db: my_database
        migrations_directory: "%kernel.root_dir%/../migrations"

As always, you can use settings from `parameters.yml` with `%...%`. For example:

    mongrate:
        mongodb_server: %mongodb_server%
        mongodb_db: %mongodb_db%_prod

Usage
=====

See the commands available by running `app/console list mongrate`

Contributing
============

Please submit pull requests on GitHub:
* [MongrateBundle](https://github.com/amyboyd/mongrate-bundle/pulls)
* [Mongrate](https://github.com/amyboyd/mongrate/pulls)

Install [PHP-CS-Fixer](https://github.com/fabpot/PHP-CS-Fixer):

    sudo curl http://get.sensiolabs.org/php-cs-fixer.phar -o /usr/local/bin/php-cs-fixer

Install the Git pre-commit hook:

    ln -s ../../resources/pre-commit .git/hooks/pre-commit
    chmod a+x .git/hooks/pre-commit
