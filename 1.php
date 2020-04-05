<?php
/*$a = 10;
$b = 2;
echo $a - $b . "<br>";
echo $a / $b . "<br>";
echo $a * $b . "<br>";
echo $a + $b . "<br>";
//var_dump(isset($a));
*/ ?>


<? /*
$var = 'hello';
$var[2] = 'f';
echo $var[0].$var[1].$var[2].$var[3].$var[4];
*/ ?>


<?php /*//'короткий синтаксис';
$var = 1;
$var += 5;
$var--;
echo $var; //5
*/ ?>


<?php
/*$text = 'hello ';
$text2 = 'word';
echo "<br>" . $text . $text2;
*/ ?>

<?php
/*$text = 'Ukraine';
echo "<br>" . $text[5] . $text[0] . $text[2];
*/ ?>

<?php
/*$arr = ['hello ', 'ord '];          //массив
$arr[1] = 'word';                   //перезапись ячейки массива
echo "<br>". $arr[0] . $arr [1];    //подставляем правельный порядок
*/?>

<?php
/*$arr = ['100'=>'root','200'=>'eee','300'=>'rrr','400'=>'www'];
echo $arr['400'];
*/?>

<?php
/*$arr = ['22'=>['ffff','dddd'],'33'=>['wwww','ccccc']];
echo $arr ['22'][1];
echo gettype($arr);*/
?>


<?php
/*echo "<br>";
$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");
$c = $a + $b; // Объединение $a и $b
//echo "Объединение \$a и \$b: \n";
var_dump($c);
echo "<br>";
echo '<pre>', var_dump($c), '</pre>';
*/ ?>


<?php
/*function b($a = 4)
{
    $a = $a / 2;
    return $a;
}

$a = 10;
echo 'зультат=' . b($a);
echo $a;
*/ ?>

<?
//условные операторы
//x ? y : Z;
$x = -17;
$x = $x < 0?    - $x : $x; //приравниваем $х К $х с условием того что он меньше нуля  у него меняеться знак.
echo $x; // меняется знак на положительный 17
?>
