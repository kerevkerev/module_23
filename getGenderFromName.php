<?php
include_once "./getPartsFromFullname.php";


$genderByName = 'Иванова Маша Ивановна';
function getGenderFromName($str)
{
    $summary = 0;
    $genderByName = getPartsFromFullname($str);

    if ((mb_substr($genderByName['surname'], -1) == 'в') || ((mb_substr($genderByName['name'], -1) == 'й') || (mb_substr($genderByName['name'], -1) == 'н')) || (mb_substr($genderByName['patronomyc'], -2) == 'ич')) {
        $summary++;
        return 1;
    } elseif ((mb_substr($genderByName['surname'], -2) == 'ва') || (mb_substr($genderByName['name'], -1) == 'а') || (mb_substr($genderByName['patronomyc'], -3) == 'вна')) {
        $summary--;
        return -1;
    } else {
        $summary = 0;
        return 0;
    }
};
