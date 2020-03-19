<?php
/*$a = 5;
$b = 5;
if ($a == $b) {
    echo 'A equally B';
} else {
    echo 'A not equally B';
}*/
?>

<?php
$a = 5;
$b = 55;
if ($a == $b) echo 'A equally B';
elseif ($b != 6) echo 'equally';
else echo 'inconsistency';

//!=== проверка на соответствие типу оператор идентификации, быстрее.
//!==
// ! если это лож
?>


<?php
$test = 'tre';
$test2 = 40;
switch ($test) {
    case 30:
        echo 'good 30';
        break;
    case 40 :
        echo '40 connect';
        break;
    case 'tren' :
        echo '50 connect';
        break;
    case 60 :
        echo '60 connect';
        break;
}
?>













