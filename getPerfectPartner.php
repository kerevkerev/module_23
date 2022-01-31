<?php
include_once './example_persons_array.php';
include_once './getFullnameFromParts.php';
include_once './getGenderFromName.php';
include_once './getPartsFromFullname.php';
include_once './getShortName.php';



function getPerfectPartner($surname, $name, $patronomyc, $arr)
{

    $randNumb = rand(0, count($arr) - 1);
    $percentCompatibility = mt_rand(50, 100) + (mt_rand(0, 10) / 10) + (mt_rand(0, 10) / 100);

    $person_1 = getShortName(getFullnameFromParts($surname, $name, $patronomyc));
    $person_2 = getShortName($arr[$randNumb]['fullname']);

    $result = <<<PerfectPartner
        $person_1 + $person_2 = 
        ♡ Идеально на $percentCompatibility% ♡    
        PerfectPartner;

    $y = getGenderFromName($arr[$randNumb]['fullname']);
    $x = getGenderFromName(getFullnameFromParts($surname, $name, $patronomyc));

    if (($x != $y && $y != 0)) {
        return $result;
    } else {
        return "Не повезло...";
    }
}
