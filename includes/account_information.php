<?php

$account_result = 0;

if(!empty($_GET['username'])){

    $highscore_url = "https://secure.runescape.com/m=hiscore_oldschool/index_lite.ws?player=".urlencode($_GET['username']);
    
    $highscore_output = file_get_contents($highscore_url);
    $skills = explode("\n",$highscore_output);

    $skill_overall = $skills[0];
    $skill_attack = $skills[1];
    $skill_defence = $skills[2];
    $skill_strength = $skills[3];
    $skill_hitpoints = $skills[4];
    $skill_ranged = $skills[5];
    $skill_prayer = $skills[6];
    $skill_magic = $skills[7];
    $skill_cooking = $skills[8];
    $skill_woodcutting = $skills[9];
    $skill_fletching = $skills[10];
    $skill_fishing = $skills[11];
    $skill_firemaking = $skills[12];
    $skill_crafting = $skills[13];
    $skill_smithing = $skills[14];
    $skill_mining = $skills[15];
    $skill_herblore = $skills[16];
    $skill_agility = $skills[17];
    $skill_thieving = $skills[18];
    $skill_slayer = $skills[19];
    $skill_farming = $skills[20];
    $skill_runecrafting = $skills[21];
    $skill_hunter = $skills[22];
    $skill_construction = $skills[23];

    $skill_overall_attributes = explode(",",$skill_overall);
    $skill_attack_attributes = explode(",",$skill_attack);
    $skill_defence_attributes = explode(",",$skill_defence);
    $skill_strength_attributes = explode(",",$skill_strength);
    $skill_hitpoints_attributes = explode(",",$skill_hitpoints);
    $skill_ranged_attributes = explode(",",$skill_ranged);
    $skill_prayer_attributes = explode(",",$skill_prayer);
    $skill_magic_attributes = explode(",",$skill_magic);
    $skill_cooking_attributes = explode(",",$skill_cooking);
    $skill_woodcutting_attributes = explode(",",$skill_woodcutting);
    $skill_fletching_attributes = explode(",",$skill_fletching);
    $skill_fishing_attributes = explode(",",$skill_fishing);
    $skill_firemaking_attributes = explode(",",$skill_firemaking);
    $skill_crafting_attributes = explode(",",$skill_crafting);
    $skill_smithing_attributes = explode(",",$skill_smithing);
    $skill_mining_attributes = explode(",",$skill_mining);
    $skill_herblore_attributes = explode(",",$skill_herblore);
    $skill_agility_attributes = explode(",",$skill_agility);
    $skill_thieving_attributes = explode(",",$skill_thieving);
    $skill_slayer_attributes = explode(",",$skill_slayer);
    $skill_farming_attributes = explode(",",$skill_farming);
    $skill_runecrafting_attributes = explode(",",$skill_runecrafting);
    $skill_hunter_attributes = explode(",",$skill_hunter);
    $skill_construction_attributes = explode(",",$skill_construction);

    //Skill order:
    //$skill_x[0] = Rank
    //$skill_x[1] = Level
    //$skill_x[2] = XP

    $account_result = 1;

    }
    else{
        
    }

?>