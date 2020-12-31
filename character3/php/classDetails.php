<?php

/*Elf*/

function savingThrowReflex($level)
{
    $reflex = 0;

    if($level >= 1 && $level <= 3)
    {
        $reflex = 1;
    }
    
    if($level >= 4 && $level <= 6)
    {
        $reflex = 2;
    }

    if($level >= 7 && $level <= 9)
    {
        $reflex = 3;
    }

    if($level >= 10)
    {
        $reflex = 4;
    }

    return $reflex;

}


function savingThrowFort($level)
{
    $fort = 0;

    if($level >= 1 && $level <= 3)
    {
        $fort = 1;
    }
    
    if($level >= 4 && $level <= 6)
    {
        $fort = 2;
    }

    if($level >= 7 && $level <= 9)
    {
        $fort = 3;
    }

    if($level >= 10)
    {
        $fort = 4;
    }

    return $fort;

}


function savingThrowWill($level)
{
    $will = 0;

    if($level >= 1 && $level <= 2)
    {
        $will = 1;
    }
    
    if($level >= 3 && $level <= 4)
    {
        $will = 2;
    }
    
    if($level == 5)
    {
        $will = 3;
    }

    if($level >= 6 && $level <= 7)
    {
        $will = 4;
    }

    if($level >= 8 && $level <= 9)
    {
        $will = 5;
    }

    if($level >= 10)
    {
        $will = 6;
    }

    return $will;

}

function criticalDie($level)
{
    $critical = "";

    if($level == 1)
    {
        $critical = "1d6/II";
    }

    if($level == 2)
    {
        $critical = "1d8/II";
    }

    if($level == 3)
    {
        $critical = "1d8/II";
    }

    if($level == 4)
    {
        $critical = "1d10/II";
    }

    if($level == 5)
    {
        $critical = "1d10/II";
    }

    if($level >= 6 && $level <= 7)
    {
        $critical = "1d12/II";
    }

    if($level >= 8 && $level <= 9)
    {
        $critical = "1d14/II";
    }

    if($level == 10)
    {
        $critical = "1d16/II";
    }

    return $critical;

}

function attackBonus($level)
{
    $attackBonus = 0;

    switch($level)
    {
        case 1:
            $attackBonus = 1;
        break;
        
        case 2:
            $attackBonus = 1;
        break;
        
        case 3:
            $attackBonus = 2;
        break;
        
        case 4:
            $attackBonus = 2;
        break;
        
        case 5:
            $attackBonus = 3;
        break;
        
        case 6:
            $attackBonus = 3;
        break;
        
        case 7:
            $attackBonus = 4;
        break;

        case 8:
            $attackBonus = 4;
        break;
        
        case 9:
            $attackBonus = 5;
        break;
        
        case 10:
            $attackBonus = 5;
        break;

        default:
        $attackBonus = 0;
    }

    return $attackBonus;
}

function actionDice($level)
{
    $actionDice = "";

    if($level <= 4)
    {
        $actionDice = "1d20";
    }

    if($level == 5)
    {
        $actionDice = "1d20+1d14";
    }

    if($level == 6)
    {
        $actionDice = "1d20+1d16";
    }

    if($level >= 7 && $level <= 9)
    {
        $actionDice = "1d20+1d20";
    }

    if($level == 10)
    {
        $actionDice = "1d20+1d20+1d14";
    }

    return $actionDice;
}


function title($level)
{
    $title = "";

    if($level == 1)
    {
        $title = "Wanderer";
    }
    else if($level == 2)
    {
        $title = "Seer";
    }
    else if($level == 3)
    {
        $title = "Quester";
    }
    else if($level == 4)
    {
        $title = "Savant";
    }
    else
    {
        $title = "Elder";
    }

    return $title;

}

function knownSpells($level)
{   
    $knownSpells = 0;

    switch($level)
    {
        case 1:
            $knownSpells = 3;
        break;
        
        case 2:
            $knownSpells = 4;
        break;
        
        case 3:
            $knownSpells = 5;
        break;
        
        case 4:
            $knownSpells = 6;
        break;
        
        case 5:
            $knownSpells = 7;
        break;
        
        case 6:
            $knownSpells = 8;
        break;
        
        case 7:
            $knownSpells = 9;
        break;
    
        case 8:
            $knownSpells = 10;
        break;
        
        case 9:
            $knownSpells = 12;
        break;
        
        case 10:
            $knownSpells = 14;
        break;
    
        default:
        $knownSpells = 0;
    }
    
    return $knownSpells;

}

function maxSpellLevel ($level)
{
    $maxSpellLevel = 0;

    if($level == 1 || $level == 2)
    {
        $maxSpellLevel = 1;
    }
    
    if($level == 3 || $level == 4)
    {
        $maxSpellLevel = 2;
    }
    
    if($level == 5 || $level == 6)
    {
        $maxSpellLevel = 3;
    }
    
    if($level == 7 || $level == 8)
    {
        $maxSpellLevel = 4;
    }
    
    if($level == 9 || $level == 10)
    {
        $maxSpellLevel = 5;
    }

    return $maxSpellLevel;
}


?>