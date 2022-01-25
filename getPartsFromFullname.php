<?php
// include './example_persons_array.php';



$str  = "Иванов Иван Иванович";
$pieces = explode(" ", $pizza);

function getPartsFromFullname($str)
{
    list($surname, $name, $patronomyc) = explode(' ', $str);
    $keys = ['surname', 'name', 'patronomyc'];
    $value = [$surname, $name, $patronomyc];
    $arr = array_combine($keys, $value);

    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}










// function result($arr)
// {
//     for ($i = 0; $i < count($arr); $i++) {
//         list($surname, $name, $patronomyc) = explode(' ', $arr[$i]['fullname']);
//         // print_r($surname . ' ' . $name . ' ' . $patronomyc . '<br>');
//         $keys = ['surname', 'name', 'patronomyc'];
//         $value = [$surname, $name, $patronomyc];
//         $arr[$i] = array_combine($keys, $value);
//     }
//     echo '<pre>';
//     print_r($arr);
//     echo '</pre>';
// };
