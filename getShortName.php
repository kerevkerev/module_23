<?php
include_once "./getPartsFromFullname.php";


$strCut = 'Бакун Анатолий Александрович';
function getShortName($cut)
{
    $temp = getPartsFromFullname($cut);
    $result = $temp['surname'] . ' ' . mb_substr($temp['name'], 0, 1) . '.';
    return $result;
}
