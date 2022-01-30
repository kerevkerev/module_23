<?php
// include './example_persons_array.php';

function getFullnameFromParts($surname, $name, $patronomyc)
{
    $str = "$surname $name $patronomyc";
    return $str;
}
