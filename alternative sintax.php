

<?/* if (логическое_выражение): */?><!--
    ...HTML-код...
<?/* else (другое_логическое_выражение):*/?>
    ...HTML-код...
--><?/* endif */?>


<?
$a = 4;
$b = 3;

if ($a > $b):
    echo $a . " больше";
    echo ", чем " . $b;
elseif ($a == $b):       // Обратите внимание, здесь elseif записан в одно слово.    : это закрывающая фигурная скобка
    echo $a . " равно " . $b;
else:
    echo $a . " меньше " . $b;
endif;

?>
