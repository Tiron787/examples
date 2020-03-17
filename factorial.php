<?php
$n = 15;
$twoVar = null;

function multiply($n)
{
    if (!$n || $n == 0) {           //если число не
        return 'not a number';
    }
    if ($n == 1) {
        return 1;
    } else {
        return $n * multiply($n - 1);

    }

}

echo multiply($n) . "<br>";


// $a = 15
// echo gmp_fact ( mixed $a ) : GMP


function factorial($n)
{

    return $n ? $n * factorial($n - 1) : 1;

}

echo factorial($twoVar);
?>



