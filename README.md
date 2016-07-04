Guid
----

Composer install
----------------

```bash
composer require "primipilus/guid:~1.0"
```

Usage
-----

```php
$guid = new \primipilus\Guid();
$guid->generate();
echo $guid;

```

Methods
-------

```php
$guid = new \primipilus\Guid();    

// methods of guid:
$guid->generate('order');
$guid->isValid();
$guid->isZero();
$guid->getValue();

echo $guid;

```