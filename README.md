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
$guid = new \primipilus\guid\Guid();
$guid->generate();
echo $guid;

```

Methods
-------

```php
$guid = new \primipilus\guid\Guid();    

// methods of guid:
$guid->generate('order');
$guid->isValid();
$guid->isZero();
$guid->getValue();

echo $guid;

$guid = \primipilus\guid\GuidHelper::createGeneratedGuid('product');
$guid = \primipilus\guid\GuidHelper::createGuid('80d58e0c-2524-cb83-208f-954807f1537b');
$guid = \primipilus\guid\GuidHelper::createZeroGuid();
\primipilus\guid\GuidHelper::validate('80d58e0c-2524-cb83-208f-954807f1537b');
\primipilus\guid\GuidHelper::zero('00000000-0000-0000-0000-000000000000');
\primipilus\guid\GuidHelper::generateValue('product');

```