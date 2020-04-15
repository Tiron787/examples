Что он хотел ?
таблицу умножения?
Калькулятор ?

<html>
<head><title>HTML Калькулятор</title></head>
<body bgcolor="#f5f5dc" text="black">

<form name="calculator">action="calc.php" method=get><br>
    <input type="button" value="1" onClick=""><br>
    <input type="button" value="2" onClick=""><br>
    <input type="button" value="3" onClick=""><br>

    <input type="button" value="5" onClick="">
    <input type="button" value="6" onClick="">
    <input type="button" value="7" onClick="">
    <input type="button" value="8" onClick="">
    <input type="button" value="9" onClick="">
    <input type="button" value="-" onClick="">
    <input type="button" value="+" onClick=""><br>
    <input type="button" value="*" onClick="">
    <input type="button" value="/" onClick="">
    <input type="button" value="0" onClick="">
    <input type="reset" value="Сброс">
    <input type="button" value="=" onClick="=eval">Ответ
    <input type="textfield" name="ans" value=""></form>
<a class="btn btn-info" href="Edit.php?id=<?= $task['id']; ?>">edit</a>
</body>
</html>


