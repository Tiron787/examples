<?php


class MyFirstClass
{
    var $data = 5;

    function functionInClass()
    {
        //$message = "<h4>function in Class</h4>";
        echo $this->data;
    }

}

