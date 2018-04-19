<?php
/**
 * @author primipilus 04.07.2016
 */

use primipilus\guid\Guid;

require dirname(__DIR__) . '/vendor/autoload.php';

echo 'validate guid: ', '80d58e0c-2524-cb83-208f-954807f1537b', PHP_EOL;
$guid = new Guid('80d58e0c-2524-cb83-208f-954807f1537b');
if ($guid->isValid()) {
    echo 'guid is valid', PHP_EOL;
}
echo PHP_EOL;

echo 'validate guid: ', '80j58e0c-2524-cb83-208f-954807f1537b', PHP_EOL;
$guid = new Guid('80j58e0c-2524-cb83-208f-954807f1537b');
if (!$guid->isValid()) {
    echo 'guid is invalid', PHP_EOL;
}
echo PHP_EOL;

echo 'zero guid:', PHP_EOL;
$guid = new Guid('00000000-0000-0000-0000-000000000000');
if ($guid->isValid()) {
    echo 'guid is valid', PHP_EOL;
}
if ($guid->isZero()) {
    echo 'guid is zero', PHP_EOL;
}
echo PHP_EOL;

echo 'generate new guid:', PHP_EOL;
$guid = \primipilus\guid\GuidHelper::createGeneratedGuid();
echo $guid, PHP_EOL;
if ($guid->isValid()) {
    echo 'guid is valid', PHP_EOL;
}


echo 'generate new guid with prefix:', PHP_EOL;
$guid = \primipilus\guid\GuidHelper::createGeneratedGuid();
echo $guid, PHP_EOL;
if ($guid->isValid()) {
    echo 'guid is valid', PHP_EOL;
}
