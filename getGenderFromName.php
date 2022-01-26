<?php
include_once "./getPartsFromFullname.php";


$genderByName = 'Иванова Маша Ивановна';
function getGenderFromName($str)
{
    $summary = 0;
    $genderByName = getPartsFromFullname($str);

    // if(strpos($genderByName['surname'],'в')&&(strpos($genderByName['name'],'й')||(strpos($genderByName['name'],'н')))&&strpos($genderByName['patronomyc'],'ич')){
    if (strpos($genderByName['surname'], 'в') && ((strpos($genderByName['name'], 'й')) || (strpos($genderByName['name'], 'н'))) && strpos($genderByName['patronomyc'], 'ич')) {
        $summary++;
        return $summary;
    } elseif (strpos($genderByName['surname'], 'ва') && (strpos($genderByName['name'], 'а')) && strpos($genderByName['patronomyc'], 'вна')) {
        $summary--;
        return $summary;
    } else {
        $summary = 0;
        return $summary;
    }
};
