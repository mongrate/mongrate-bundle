[![Build Status](https://travis-ci.org/mongrate/mongrate-bundle.svg?branch=master)](https://travis-ci.org/mongrate/mongrate-bundle)
[![Code Coverage](https://scrutinizer-ci.com/g/amyboyd/mongrate-bundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/amyboyd/mongrate-bundle/?branch=master)

Mongrate Bundle
===============

A Symfony bundle for [Mongrate](http://mongrate.com/).

Installation and Use
====================

Please see the documentation [on mongrate.com](http://mongrate.com/docs).

Contributing
============

Please submit pull requests on GitHub:
* [MongrateBundle](https://github.com/mongrate/mongrate-bundle/pulls)
* [Mongrate](https://github.com/mongrate/mongrate/pulls)

Install [PHP-CS-Fixer](https://github.com/fabpot/PHP-CS-Fixer):

```sh
sudo curl http://get.sensiolabs.org/php-cs-fixer.phar -o /usr/local/bin/php-cs-fixer
```

Install the Git pre-commit hook:

```sh
ln -s ../../resources/pre-commit .git/hooks/pre-commit
chmod a+x .git/hooks/pre-commit
```

To run the tests:

```sh
vendor/bin/phpunit
```
