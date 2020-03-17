<?php
//пепредаёт по ссылке из вне в функцию
function add_some_extra(&$string)
{
    $string .= 'и кое-что еще.';
}

$str = 'Это строка, ';
add_some_extra($str);
echo $str;    // выведет 'Это строка, и кое-что еще.'
