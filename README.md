[![Build Status](https://travis-ci.org/mongrate/mongrate-bundle.svg?branch=master)](https://travis-ci.org/mongrate/mongrate-bundle)
[![Code Coverage](https://scrutinizer-ci.com/g/mongrate/mongrate-bundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/mongrate/mongrate-bundle/?branch=master)

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
bin/test
```

Test apps for different Symfony versions
========================================

In the test-app directory, there is an app with several `composer.json` files, one per Symfony
version (currently 2.5, 2.8, 3.0 and 3.1). To install the test-app dependencies,
run `test-app/bin/composer-install`. You can then test Mongrate bundle commands like this:

```
SYMFONY_VERSION=3.1 test-app/bin/run-command mongrate:list-migrations
SYMFONY_VERSION=2.5 test-app/bin/run-command mongrate:up-all
```
