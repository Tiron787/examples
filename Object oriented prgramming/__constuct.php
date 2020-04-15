<?php
class BaseClass {
    function __construct() { //Потому что он вызывается автоматически при создании экземпляра объекта.
        print "Конструктор класса BaseClass\n";
    }
}

class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();
        print "Конструктор класса SubClass\n";
    }
}

class OtherSubClass extends BaseClass {
    // наследует конструктор BaseClass
}

// Конструктор класса BaseClass
$obj = new BaseClass();
echo "<br>";
// Конструктор класса BaseClass
// Конструктор класса SubClass
$obj = new SubClass();
echo "<br>";
// Конструктор класса BaseClass
$obj = new OtherSubClass();
?>



<?php
/* Connect to a table database */
$tt = new TokyoTyrantTable("localhost", 1979);

/* Passing null to put generates a new uid */
$index = $tt->put(null, array("column1" => "some data", "column2" => "more data"));

/* Construct an iterator */
$it = new TokyoTyrantIterator($tt);

foreach ($it as $value) {
    var_dump($value);
}
?>
<?
$product1 = new ShopProduct();
$product1->title = "Собачье сердце";
$product1->producerMainName = "Булгаков";
$product1->producerFirstName = "Михаил";
//Sproduct1->price = 5.99;
?>
