<?php
$a = 100;
/* Далее идет функция, которая возвращает ссылку */
function &s () {
    global $a;
// Возвращаем ссылку на переменную $a
    return $a;
}
// Присваиваем ссылку переменной $b
$b = &s();
$b = 0;
echo $a; // Выводит 0
?>

<?php
$phpver = phpversion();
if ($phpver[0] === "5")
{
    function getversion() { return "Вы используете PHP5"; }
}
if ($phpver[0] === "4")
{
    function getversion() { return "Вы используете PHP4"; }
}
if ($phpver[0] === "3")
{
    function getversion() { return "Вы используете PHP3"; }
}
echo @getversion();
?>
