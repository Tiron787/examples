
<?php
$a=$_GET['action']; //Для удобства переписываем значения полей присланной формы в простые переменные.
$x=$_GET['x'];
$y=$_GET['y'];
$result=0; //Это переменная для результата действия

if($a=="+") //Проверяем значения переменной $a - действие, которое мы должны выполнить
    //сложение
    $result=$x+$y;
else if($a=="-") //вычитание
    $result=$x-$y;
else if($a=="*") //умножение
    $result=$x*$y;
else if($a=="/" //деление
    && $y!=0) //на 0 делить нельзя
    $result=$x/$y;
else if($a=="^"){ //возведение в степень
    $result=1; //Его мы будем умножать, значит начальное значение 1.
    for($i=0;$i<$y;$i++) //Об этом ниже, в пояснении
        $result*=$x;
}

else
    $result="Действие не выбрано"; //Мы не узнали ни одного действия

//Теперь выводим результат
echo "x";
if($a)
    echo $a; //Если действие выбрано - между переменными показываем это действие
else
    echo " "; //Иначе покажем пробел
echo "y=$result<br/>"; //х у=чему-то... И еще надо бы не забыть отступить строчку до начала формы
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


print_r($_POST);
exit;
if($_POST['group1'] == add){
	echo "$first + $second";
}
else if($_POST['group1'] == substract){
	echo "$first - $second";
}
else if($_POST['group1'] == times){
	echo "$first * $second";
}
else if($_POST['group1'] == davide){
	echo "$first / $second";
}
?>
</p>
</html>