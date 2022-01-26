<?php
include_once "./getPartsFromFullname.php";


$strCut = 'Бакун Анатолий Александрович';
function getShortName($Cut)
{
    $temp = getPartsFromFullname($Cut);
    echo $temp['surname'] . ' ' . substr($temp['name'], 0, 2) . '.';
}
