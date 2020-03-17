<?
function sortArr($data) {
    foreach ($data as $key1){
        if (is_int($key1)){                     //is_int Проверяет, является ли переменная целым числом
            $sort1['numbers'][] = $key1;
        }else{
            $sort1['string'][] = $key1;
        }
    }
    return $sort1;
}

print_r(sortArr($arr76));
?>

//Array ( [numbers] => Array ( [0] => 2 [1] => 56 [2] => 1 [3] => 3 [4] => 5 [5] => 65 [6] => 4 ) [string] => Array ( [0] => Andrey [1] => Oleg [2] => open ) )






/*echo "<hr>";

function NewTest1($arreyOne){
    $nul = false;
    foreach ($arreyOne as $item){
        $nul .= $item ." ";
    }
    return $nul;
}
echo NewTest1($arr76);
echo "<hr>";*/