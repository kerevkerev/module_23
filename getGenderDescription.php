<?php
include_once './getPartsFromFullname.php';
include_once './getGenderFromName.php';
include_once './example_persons_array.php';




function getGenderDescription($arr)
{
    $i = 0;
    $resultingList = [];
    while ($i < count($arr)) {
        $resultingList[$i] =  getGenderFromName($arr[$i]['fullname']);
        $i++;
    }



    function male($var)
    {
        return $var == 1;
    }
    function female($var)
    {
        return $var == -1;
    }
    function notDefined($var)
    {
        return $var == 0;
    }
    function percent($arr, $func)
    {
        $result = round(count(array_filter($arr, $func)) / count($arr) * 100, 1);
        return $result;
    }



    $male = percent($resultingList, 'male');
    $female = percent($resultingList, 'female');
    $notDefined = percent($resultingList, 'notDefined');

    $result = <<<GenderСomposition
    Гендерный состав аудитории:
    ---------------------------
    Мужчины - $male%
    Женщины - $female%
    Не удалось определить - $notDefined%
GenderСomposition;
    return $result;
}
