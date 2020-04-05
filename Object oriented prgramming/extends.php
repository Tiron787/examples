<?php

class Foo
{
    public function printItem($string)
    {
        echo 'Foo: ' . $string . PHP_EOL;
    }

    public function printPHP()
    {
        echo 'PHP просто супер.' . PHP_EOL;
    }
}

class Bar extends Foo
{
    public function printItem($string)
    {
        echo 'Bar: ' . $string . PHP_EOL;
    }
}

$foo = new Foo();
$bar = new Bar();
$foo->printItem('baz'); // Выведет: 'Foo: baz'
echo "<br>";
$foo->printPHP();       // Выведет: 'PHP просто супер'
echo "<br>";
$bar->printItem('baz'); // Выведет: 'Bar: baz'
echo "<br>";
$bar->printPHP();       // Выведет: 'PHP просто супер'

?>