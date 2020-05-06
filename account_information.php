<?php

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
    $skill_firemaking = $skills[11];
    $skill_crafting = $skills[12];
    $skill_smithing = $skills[13];
    $skill_herblore = $skills[14];
    $skill_agility = $skills[15];
    $skill_thieving = $skills[16];
    $skill_slayer = $skills[17];
    $skill_farming = $skills[18];
    $skill_runecrafting = $skills[19];
    $skill_hunter = $skills[20];
    $skill_construction = $skills[21];

    $skill_overall_attributes = explode(",",$skill_overall[0]);
    $skill_attack_attributes = explode(",",$skill_attack[1]);
    $skill_defence_attributes = explode(",",$skill_defence[2]);
    $skill_strength_attributes = explode(",",$skill_strength[3]);
    $skill_hitpoints_attributes = explode(",",$skill_hitpoints[4]);
    $skill_ranged_attributes = explode(",",$skill_ranged[5]);
    $skill_prayer_attributes = explode(",",$skill_prayer[6]);
    $skill_magic_attributes = explode(",",$skill_magic[7]);
    $skill_cooking_attributes = explode(",",$skill_cooking[8]);
    $skill_woodcutting_attributes = explode(",",$skill_woodcutting[9]);
    $skill_fletching_attributes = explode(",",$skill_fletching[10]);
    $skill_firemaking_attributes = explode(",",$skill_firemaking[11]);
    $skill_crafting_attributes = explode(",",$skill_crafting[12]);
    $skill_smithing_attributes = explode(",",$skill_smithing[13]);
    $skill_herblore_attributes = explode(",",$skill_herblore[14]);
    $skill_agility_attributes = explode(",",$skill_agility[15]);
    $skill_thieving_attributes = explode(",",$skill_thieving[16]);
    $skill_slayer_attributes = explode(",",$skill_slayer[17]);
    $skill_farming_attributes = explode(",",$skill_farming[18]);
    $skill_runecrafting_attributes = explode(",",$skill_runecrafting[19]);
    $skill_hunter_attributes = explode(",",$skill_hunter[20]);
    $skill_construction = explode(",",$skill_construction[21]);

    //Skill order:
    //$skill_x[0] = Rank
    //$skill_x[1] = Level
    //$skill_x[2] = XP

    }
    else{
        echo "Please Enter a Username";
    }

?>