<?php

function getSurname()
{
    $surnames = array(
        "Aeravansel",
        "Brightwing",
        "Elaéyadar",
        "Erladden",
        "Evanara",
        "Donnathlascen",
        "Ellarian",
        "Gwaelon",
        "Fenmarel",
        "Ereuvyn",
        "Eveningfall",
        "Fellmirr",
        "Ildacer",
        "Laelithar",
        "Lhoril",
        "Maendellyn",
        "Kelerandri",
        "Nightstar",
        "Nharimlur",
        "Raedrimn",
        "Sharrith",
        "Tamlyranth",
        "Uirthur",
        "Tarnruth",
        "Ortauré",
        "Selakiir",
        "Talesspur",
        "Kadelaryn"
    );
        
    $numberNames = count($surnames);
    
    $randomName = rand (0, ($numberNames - 1) );
    
    return $surnames[$randomName];
}


function getRandomSex()
{
    $sex = "";

    $sexIdentity = rand (0, 1);

    if($sexIdentity == 0)
    {
        $sex = 'Female';
    }
    else
    {
        $sex = 'Male';
    }

    return $sex;

}

function getCharacterName ($sex)
{
    if($sex == 'Female')
    {
        
        $femaleNames = array(
        "Arlavana",
        "Cedena",
        "Anathia",
        "Aermadriel",
        "Garlavella",
        "Aenabeth",
        "Firnavorna",
        "Herlavana",
        "Aermavana",
        "Aernadriel",
        "Gallebren",
        "Gamadriel",
        "Firthathia",
        "Firredriel",
        "Aerallia",
        "Ganathia",
        "Garathia",
        "Aermavorna",
        "Caernavana",
        "Firthavorna",
        "Cemadriel",
        "Cellevella",
        "Caelvadriel",
        "Arredena",
        "Garrevorna",
        "Garovorna",
        "Caermalorna",
        "Amathia",
        "Gerlabeth"
        );
        
        $numberNames = count($femaleNames);
        
        $randomName = rand (0, ($numberNames - 1) );
        
        return $femaleNames[$randomName];
        
    }
    else
    {
        
        $maleNames = array(
        "Aethafin",
        "Amabryn",
        "Caerodrim",
        "Herthalon",
        "Fithafin",
        "Halvalian",
        "Herthalon",
        "Harlafin",
        "Firmalon",
        "Finavel",
        "Aerlavorn",
        "Caethabryn",
        "Garrebryn",
        "Manavorn",
        "Halvadrim",
        "Harthavel",
        "Cerlalon",
        "Firrebryn",
        "Allevorn",
        "Malvaden",
        "Syrthadrim",
        "Sythalian",
        "Marnalorn",
        "Synalian",
        "Syrthadrim",
        "Hethafin",
        "Ganabryn",
        "Harnavan",
        "Syrnaden",
        "Firadrim",
        "Anadrim",
        "Maravel"
        );
        
        $numberNames = count($maleNames);
        
        $randomName = rand (0, ($numberNames - 1) );
        
        return $maleNames[$randomName];
    }
}


function getRandomName ($sex)
{
    $name = "";
    $theSex;

    if($sex == 'Male')
    {
        $theSex = 'Male';
    }
    else if($sex == 'Female')
    {
        $theSex = 'Female';
    }
    else
    {
        $theSex = getRandomSex();

    }

    $name = getCharacterName ($theSex);

    return $name;
}




?>