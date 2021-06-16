[run-test]
Running tests for PHP-String class

TODO: set up proper tests :)

<?php

require __DIR__ . '/vendor/SourcePot/Autoload.php';

use SourcePot\Str;

$original = 'HelLo, World';

echo 'new Str($original)' . "\n";
$str = new Str($original);
var_dump($str);

echo 'Str::from($original)' . "\n";
$str = Str::from($original);
var_dump($str);

echo '$str->toLower()' . "\n";
var_dump($str->toLower());

echo '$str->toUpper()' . "\n";
var_dump($str->toUpper());

echo '$str->replace(\'l\', \'a\')' . "\n";
var_dump($str->replace('l', 'a'));

echo '$str->replace(\'l\', \'a\', true)' . "\n";
var_dump($str->replace('l', 'a', true));

echo '$str->pad(15, Str::PAD_LEFT)' . "\n";
var_dump($str->pad(15, Str::PAD_LEFT));
echo '$str->pad(15, Str::PAD_RIGHT)' . "\n";
var_dump($str->pad(15, Str::PAD_RIGHT));

echo '$str->pad(20, Str::PAD_LEFT, \'-\')' . "\n";
var_dump($str->pad(20, Str::PAD_LEFT, '-'));
echo '$str->pad(20, Str::PAD_RIGHT, \'-\')' . "\n";
var_dump($str->pad(20, Str::PAD_RIGHT, '-'));

echo '$str->reverse()' . "\n";
var_dump($str->reverse());

echo '$str->charAt(3)' . "\n";
var_dump($str->charAt(3));
echo '$str->charAt(-3)' . "\n";
var_dump($str->charAt(-3));

echo '$str->slice(2,3)' . "\n";
var_dump($str->slice(2,3));
echo '$str->slice(9)' . "\n";
var_dump($str->slice(9));