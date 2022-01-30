<?php
// include './example_persons_array.php';



$str  = "Иванов Иван Иванович";

function getPartsFromFullname($str)
{
    list($surname, $name, $patronomyc) = explode(' ', $str);
    $keys = ['surname', 'name', 'patronomyc'];
    $value = [$surname, $name, $patronomyc];
    return array_combine($keys, $value);
}










