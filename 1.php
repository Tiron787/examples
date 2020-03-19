
<?php
/*$a = 10;
$b = 2;
echo $a - $b . "<br>";
echo $a / $b . "<br>";
echo $a * $b . "<br>";
echo $a + $b . "<br>";
//var_dump(isset($a));
*/?>




<?
$var = 'hello';
$var[2] = 'f';
echo $var[0].$var[1].$var[2].$var[3].$var[4];
?>


<?php /*//'короткий синтаксис';
$var = 1;
$var += 5;
$var--;
echo $var; //5
*/?>




<?php
/*$text = 'hello ';
$text2 = 'word';
echo "<br>" . $text . $text2;
*/?>

<?php
/*$text = 'Ukraine';
echo "<br>" . $text[5] . $text[0] . $text[2];
*/?>

<?php
/*$arr = ['hello ', 'word '];
$arr[0] = 'bye';            //перезапись ячейки массива

"<br>" . $arr [1] . $arr[0];
*/?>

<?php
/*$arr = ['1' => '$1000', '2' => '$1500', '3' => '3000']; //Ассоциативные массивы
echo "<br>" . $arr[2], ' ', $arr[3];
*/?>

<?php
/*echo "по ссылке";
$arr = ['1' => ['11', '22'], '2' => ['33', '44']];
echo "<br>" . $arr ['2'][1]; //44
*/?>

<?php
/*echo "<br>";
$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");
$c = $a + $b; // Объединение $a и $b
//echo "Объединение \$a и \$b: \n";
var_dump($c);
echo "<br>";
echo '<pre>', var_dump($c), '</pre>';
*/?>


<?php
/*function b($a = 4)
{
    $a = $a / 2;
    return $a;
}

$a = 10;
echo 'зультат=' . b($a);
echo $a;
*/?>