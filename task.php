
<html>
<a$s = 'Example Text String';
С помощью команд  php:
1. Заменить все буквы T на N, вывести результат на экран.
2. Разбить строку $s на слова и поместить эти слова в массив. Вывести полученный массив на экран.
3. Написать функцию, которая получает в качестве входного параметра строку, и делает все строчные буквы в ней прописными, а прописные — строчными.
4. Написать функцию, которая производит замену строки $s на значение, переданное программе в качестве GET-параметра.
</html>
<?php
$s = 'Example Text String';

$str = 'Example Text String';

for($i =0; $i < mb_strlen($str); $i++)
    switch ($str{$i}) {
        case 'T': $str{$i} = 'N'; break;
    }

echo $str;

$arr = explode(' ',$str);

var_dump($arr);

for($i=0; $i < count($arr); $i++)
    echo $arr[$i]. ' ';

echo mb_strtoupper($str);


function up2low_low2up($str) {
    for ($i = 0; $i < mb_strlen($str); $i++)
        if ($str[$i] == mb_strtolower($str[$i])) $str[$i] = mb_strtoupper($str[$i]);
        elseif ($str[$i] == mb_strtoupper($str[$i])) $str[$i] = mb_strtolower($str[$i]);
    return $str;
}

echo up2low_low2up($str);

?>


