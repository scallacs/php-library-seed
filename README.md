# php-library-seed
This is a PHP library infrastructure for bootstrapping new packages.

## Key features

- Run unit tests
- Run integration test
- Code coverage
- Performance ? 
- Publish to packagist
- travis integration 

## Setup

```shell
git clone git@github.com:scallacs/php-library-seed.git
cd php-library-seed
composer install
cp phpunit.xml.dist phpunit.xml
```

To enable code coverage xdebug must be enabled.

`php -v` should output something like this:

```text
PHP 7.0.6 (cli) (built: Apr 27 2016 14:00:40) ( ZTS )
Copyright (c) 1997-2016 The PHP Group
Zend Engine v3.0.0, Copyright (c) 1998-2016 Zend Technologies
    with Xdebug v2.4.0, Copyright (c) 2002-2016, by Derick Rethans
```


## Development

### Testing 

```shell
composer run test
```
