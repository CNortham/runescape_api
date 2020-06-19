<?php
//error_reporting(0);
include("includes/account_information.php");
include("includes/errors.php");
include("includes/logic.php");
include("includes/skills.php");
include("includes/rs_exp.php");
//var_dump($_POST);
$max_level = 13034431;
$rs = new RSExp();
?>
<html>
    <head>
    <title>Runescape API</title>
    
    <script src="js/vue.js"></script>
    <script src="js/jquery.js"></script>
    </head>
    <body>

    <!--Search Bar-->
    <form style="margin-top:30px;" action="">
        <div class="container">
            <div class="row" id="search">
                <div class="col-lg-6 mx-auto">
                    <h1 <?php echo ($account_result == 1 ? "hidden" : ""); ?>>Please Enter Username</h1>
                    <h1 <?php echo $show; ?>>Account Not Found</h1>

                    <div class="input-group">
                        <input type="text" class="form-control" name="username" value="<?php echo $_GET['username']; ?>">
                        <span class="input-group-btn">
                        <input class="btn btn-secondary" type="submit" value="Search">
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--Results-->
    <div id="skills" <?php echo ($account_found == 1 ? "" : "hidden"); ?>>
        <div class="container">
            <div class="col-lg-6 mx-auto">
                <div class="overall">
                    <!--Overall-->
                    <img class="icons" src="img/skill_icons/Overall_icon.png" alt="Overall"> 
                    <?php echo $skill_overall_attributes[1]; ?> 
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                <!--Attack-->
                <img class="icons" src="img/skill_icons/Attack_icon.png" alt="Attack"> 
                <?php echo $skill_attack_attributes[1]; ?> 
                    <div v-for="mainSki in Attack">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
                <div class="col-sm">
                <!--Hitpoints-->
                    <img class="icons" src="img/skill_icons/Hitpoints_icon.png" alt="Hitpoints"> 
                    <?php echo $skill_hitpoints_attributes[1]; ?> 
                    <div v-for="mainSki in Hitpoints">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
                <div class="col-sm">
                <!--Mining-->
                    <img class="icons" src="img/skill_icons/Mining_icon.png" alt="Mining"> 
                    <?php echo $skill_mining_attributes[1]; ?> 
                    <div v-for="mainSki in Mining">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                <!--Strength-->
                    <img class="icons" src="img/skill_icons/Strength_icon.png" alt="Strength"> 
                    <?php echo $skill_strength_attributes[1]; ?> 
                    <div v-for="mainSki in Strength">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
                <div class="col-sm">
                <!--Agility-->
                    <img class="icons" src="img/skill_icons/Agility_icon.png" alt="Agility"> 
                    <?php echo $skill_agility_attributes[1]; ?>
                    <div v-for="mainSki in Agility">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
                <div class="col-sm">
                <!--Smithing-->
                    <img class="icons" src="img/skill_icons/Smithing_icon.png" alt="Smithing"> 
                    <?php echo $skill_smithing_attributes[1]; ?>
                    <div v-for="mainSki in Smithing">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                <!--Defence-->
                    <img class="icons" src="img/skill_icons/Defence_icon.png" alt="Defence"> 
                    <?php echo $skill_defence_attributes[1]; ?>
                    <div v-for="mainSki in Defence">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
                <div class="col-sm">
                <!--Herblore-->
                    <img class="icons" src="img/skill_icons/Herblore_icon.png" alt="Herblore"> 
                    <?php echo $skill_herblore_attributes[1]; ?>
                    <div v-for="mainSki in Herblore">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
                <div class="col-sm">
                <!--Fishing-->
                    <img class="icons" src="img/skill_icons/Fishing_icon.png" alt="Fishing"> 
                    <?php echo $skill_fishing_attributes[1]; ?>
                    <div v-for="mainSki in Fishing">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                <!--Ranging-->
                    <img class="icons" src="img/skill_icons/Ranged_icon.png" alt="Ranging"> 
                    <?php echo $skill_ranged_attributes[1]; ?>
                    <div v-for="mainSki in Ranging">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
                <div class="col-sm">
                <!--Thieving-->
                    <img class="icons" src="img/skill_icons/Thieving_icon.png" alt="Thieving"> 
                    <?php echo $skill_thieving_attributes[1]; ?>
                    <div v-for="mainSki in Thieving">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
                <div class="col-sm">
                <!--Cooking-->
                    <img class="icons" src="img/skill_icons/Cooking_icon.png" alt="Cooking"> 
                    <?php echo $skill_cooking_attributes[1]; ?>
                    <div v-for="mainSki in Cooking">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                <!--Prayer-->
                    <img class="icons" src="img/skill_icons/Prayer_icon.png" alt="Prayer"> 
                    <?php echo $skill_prayer_attributes[1]; ?>
                    <div v-for="mainSki in Prayer">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
                <div class="col-sm">
                <!--Crafting-->
                    <img class="icons" src="img/skill_icons/Crafting_icon.png" alt="Crafting"> 
                    <?php echo $skill_crafting_attributes[1]; ?>
                    <div v-for="mainSki in Crafting">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
                <div class="col-sm">
                <!--Firemaking-->
                    <img class="icons" src="img/skill_icons/Firemaking_icon.png" alt="Firemaking"> 
                    <?php echo $skill_firemaking_attributes[1]; ?>
                    <div v-for="mainSki in Firemaking">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                <!--Magic-->
                    <img class="icons" src="img/skill_icons/Magic_icon.png" alt="Magic"> 
                    <?php echo $skill_magic_attributes[1]; ?>
                    <div v-for="mainSki in Magic">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
                <div class="col-sm">
                <!--Fletching-->
                    <img class="icons" src="img/skill_icons/Fletching_icon.png" alt="Fletching"> 
                    <?php echo $skill_fletching_attributes[1]; ?>
                    <div v-for="mainSki in Fletching">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
                <div class="col-sm">
                <!--Woodcutting-->
                    <img class="icons" src="img/skill_icons/Woodcutting_icon.png" alt="Woodcutting"> 
                    <?php echo $skill_woodcutting_attributes[1]; ?>
                    <div v-for="mainSki in Woodcutting">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                <!--Runecrafting-->
                    <img class="icons" src="img/skill_icons/Runecraft_icon.png" alt="Runecrafting"> 
                    <?php echo $skill_runecrafting_attributes[1]; ?>
                    <div v-for="mainSki in Runecrafting">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
                <div class="col-sm">
                <!--Slayer-->
                    <img class="icons" src="img/skill_icons/Slayer_icon.png" alt="Slayer"> 
                    <?php echo $skill_slayer_attributes[1]; ?>
                    <div v-for="mainSki in Slayer">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
                <div class="col-sm">
                <!--Farming-->
                    <img class="icons" src="img/skill_icons/Farming_icon.png" alt="Farming"> 
                    <?php echo $skill_farming_attributes[1]; ?>
                    <div v-for="mainSki in Farming">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                <!--Construction-->
                    <img class="icons" src="img/skill_icons/Construction_icon.png" alt="Construction"> 
                    <?php echo $skill_construction_attributes[1]; ?>
                    <div v-for="mainSki in Construction">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
                <div class="col-sm">
                <!--Hunter-->
                    <img class="icons" src="img/skill_icons/Hunter_icon.png" alt="Hunter"> 
                    <?php echo $skill_hunter_attributes[1]; ?>
                    <div v-for="mainSki in Hunter">
                        <input class="skillsC" type="radio" :value="mainSki.skillID" id="mainSki.skillID" v-model="checkedSkills" @change="check($event)" name="radio_skills">
                    </div>
                </div>
                <div class="col-sm">
                <!--Empty (total level)-->
                </div>
            </div>
        </div>
    </div>

    <!--Buttons-->
    <div class="container" id="options" <?php echo ($account_found == 1 ? "" : "hidden"); ?>>
        <div class="row">
            <div class="col-lg-6">
                <button v-on:click='questClick'>Quests</button>
            </div>
            <div class="col-lg-6">
                <button v-on:click='skillcalClick'>Skills Calculator</button>
            </div>
        </div>
    </div>

    <!--Options-->
    <div <?php echo ($account_found == 1 ? "" : "hidden"); ?>>

        <!--Quests-->
        <div class="container" id="quests">
            <div class="row">
                <div class="col-lg-12">
                    QUESTS
                </div>
            </div>
        </div>

        <!--Skills Calculator-->
        <div class="container" id="skillsCal">
            <div class="row">
                <div class="col-lg-12" id="p_select">
                    <p>Please Select A Skill</p>
                </div>
            </div>

            <div id="Attack" class="calculators">
            Attack
            </div>
            
            <div id="Hitpoints" class="calculators">
            Hitpoints
            </div>
            <div id="Mining" class="calculators">
            >Mining
            </div>
            <div id="Strength" class="calculators">
            Strength
            </div>


            <div id="Agility" class="calculators">
                <div class="row">
                    <!--99-->
                    <div class="col-sm">
                        <h2><u>To Get 99</u></h2>
                        <div id="agility_to_nine_nine">
                        <?php
                            $i=0;
                            foreach ($skills as $skills_99) {
                                for ($i = 0; $i < 16; $i++) {
                                    if($skills_99[$i]['req'] <= $skill_agility_attributes[1]){
                                        echo  "<div style='background-color: lightgreen;'>".$skills_99[$i]['name']." <br> ".round($max_level / $skills_99[$i]['exp'], 2)." laps, <br>".round((($skills_99[$i]['time'] * $max_level / $skills_99[$i]['exp']) / 60) / 60, 2)." Hours to 99 from ".$skill_agility_attributes[1]."<br></div><br>";
                                    }else{
                                        echo  "<div style='background-color: lightpink;'>".$skills_99[$i]['name']." <br> ".round($max_level / $skills_99[$i]['exp'], 2)." laps, <br>".round((($skills_99[$i]['time'] * $max_level / $skills_99[$i]['exp']) / 60) / 60, 2)." Hours to 99 from ".$skill_agility_attributes[1]."<br></div><br>";
                                    }
                                }
                            }
                        ?>
                        </div>
                    </div>

                    <!--Specific-->
                    <div class="col-sm" id="agil_vue">
                        <h2><u>To Get <input type="number" id="agil_des_level" v-model="agil_des_level"></u></h2>
                        <div id="agility_to_des_level">
                            <div style='background-color: lightgreen;'>Gnome Stronghold<br>
                            <p v-model = "gnome_laps"></p> laps <br>
                            <p v-model = "gnome_hours"></p> Hours to {{ agil_des_level }} from <?php echo $skill_agility_attributes[1] ?><br>
                            </div>
                        <br>
                        </div>
                    </div>

                    <!--Fastest-->
                    <div class="col-sm">
                        <h2><u>Fastest to <?php echo $skill_agility_attributes[1]+1; ?></u></h2>
                        <div id="agility_to_next">
                        <?php
                            $next_level = $skill_agility_attributes[1]+1;
                            for ($level = $skill_agility_attributes[1]; $level < $next_level; $level++){
                                $cur_lev_to_next = $rs->level_to_xp($level);
                                $exp_left = $skill_agility_attributes[2] - $cur_lev_to_next;
                            }
                            
                            $i=0;
                            foreach ($skills as $skills_next) {
                                for ($i = 0; $i < 16; $i++) {
                                    if($skills_next[$i]['req'] <= $skill_agility_attributes[1]){

                                        $next_level_time = round((($skills_next[$i]['time'] * $exp_left / $skills_next[$i]['exp']) / 60) / 60, 2);

                                        echo  "<div style='background-color: lightgreen;'>".$skills_next[$i]['name']." <br> ".round($exp_left / $skills_next[$i]['exp'], 2)." laps, <br>".round((($skills_next[$i]['time'] * $exp_left / $skills_next[$i]['exp']) / 60) / 60, 2)." Hours to ".$next_level." from ".$skill_agility_attributes[1]."<br></div><br>";
                                    }else{
                                        echo  "<div style='background-color: lightpink;'>".$skills_next[$i]['name']." <br> ".round($exp_left / $skills_next[$i]['exp'], 2)." laps, <br>".round((($skills_next[$i]['time'] * $exp_left / $skills_next[$i]['exp']) / 60) / 60, 2)." Hours to ".$next_level." from ".$skill_agility_attributes[1]."<br></div><br>";
                                    }
                                }
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>

            <div id="Smithing" class="calculators">
            </div>
            <div id="Defence" class="calculators">
            </div>
            <div id="Herblore" class="calculators">
            </div>
            <div id="Fishing" class="calculators">
            </div>
            <div id="Ranging" class="calculators">
            </div>
            <div id="Thieving" class="calculators">
            </div>
            <div id="Cooking" class="calculators">
            </div>
            <div id="Prayer" class="calculators">
            </div>
            <div id="Crafting" class="calculators">
            </div>
            <div id="Firemaking" class="calculators">
            </div>
            <div id="Magic" class="calculators">
            </div>
            <div id="Fletching" class="calculators">
            </div>
            <div id="Woodcutting" class="calculators">
            </div>
            <div id="Runecrafting" class="calculators">
            </div>
            <div id="Slayer" class="calculators">
            </div>
            <div id="Farming" class="calculators">
            </div>
            <div id="Construction" class="calculators">
            </div>
            <div id="Hunter" class="calculators">
            </div>
        </div>
    <div>

    <script>
        //Buttons//
        new Vue({
            el: '#options',
            methods: {
                questClick: function(){
                    var quests = document.getElementById("quests");
                    var skillsCal = document.getElementById("skillsCal");
                    var skillsC = document.getElementsByClassName("skillsC");

                    if (quests.style.display === "block") {
                        quests.style.display = "none";
                    } else {
                        skillsCal.style.display = "none";
                        quests.style.display = "block";
                        
                        for (var i=0;i<skillsC.length;i+=1){
                            skillsC[i].style.display = 'none';
                        }
                    }
                },
                skillcalClick: function(){
                    var quests = document.getElementById("quests");
                    var skillsCal = document.getElementById("skillsCal");
                    var skillsC = document.getElementsByClassName("skillsC");

                    console.log(skillsC);

                    if (skillsCal.style.display === "block") {
                        skillsCal.style.display = "none";

                        for (var i=0;i<skillsC.length;i+=1){
                            skillsC[i].style.display = 'none';
                        }
                    } else {
                        quests.style.display = "none";
                        skillsCal.style.display = "block";

                        for (var i=0;i<skillsC.length;i+=1){
                            skillsC[i].style.display = 'block';
                        }
                    }
                }
            }
        })

        //RadioButtons//
        new Vue({
            el: '#skills',
            data: {
                checkedSkills: [],
                Attack: [{
                    skillID: 'Attack'
                }],
                Hitpoints: [{
                    skillID: 'Hitpoints'
                }],
                Mining: [{
                    skillID: 'Mining'
                }],
                Strength: [{
                    skillID: 'Strength'
                }],
                Agility: [{
                    skillID: 'Agility'
                }],
                Smithing: [{
                    skillID: 'Smithing'
                }],
                Defence: [{
                    skillID: 'Defence'
                }],
                Herblore: [{
                    skillID: 'Herblore'
                }],
                Fishing: [{
                    skillID: 'Fishing'
                }],
                Ranging: [{
                    skillID: 'Ranging'
                }],
                Thieving: [{
                    skillID: 'Thieving'
                }],
                Cooking: [{
                    skillID: 'Cooking'
                }],
                Prayer: [{
                    skillID: 'Prayer'
                }],
                Crafting: [{
                    skillID: 'Crafting'
                }],
                Firemaking: [{
                    skillID: 'Firemaking'
                }],
                Magic: [{
                    skillID: 'Magic'
                }],
                Fletching: [{
                    skillID: 'Fletching'
                }],
                Woodcutting: [{
                    skillID: 'Woodcutting'
                }],
                Runecrafting: [{
                    skillID: 'Runecrafting'
                }],
                Slayer: [{
                    skillID: 'Slayer'
                }],
                Farming: [{
                    skillID: 'Farming'
                }],
                Construction: [{
                    skillID: 'Construction'
                }],
                Hunter: [{
                    skillID: 'Hunter'
                }]

            },
            methods: {
                check: function(e) {
                    var p_select = document.getElementById("p_select");
                    var calculators = document.getElementsByClassName("calculators");
                    var selected_skill = document.getElementById(this.checkedSkills);

                    console.log(this.checkedSkills)
                    if(this.checkedSkills.length > 0)
                    {
                        p_select.style.display = "none";
                    }

                    for (var i=0;i<calculators.length;i+=1){
                        calculators[i].style.display = 'none';
                        }

                    selected_skill.style.display = "block";
                }
            }
        })

        //Calc Agility//
        new Vue({
            el: '#agil_vue',

            data: {
                gnome_laps: 87,
                gnome_hours: 34,
            },
            watch:{
                gnome_laps: function(des_level){
                    this.agil_des_level.value = des_level;

                    
                    if(des_level == 1){
                        exp = 0;
                        exp_dif = 83;
                    }else{
                        exp_dif = (des_level - 1 + 300 * 2 * ((des_level-1)/7))/4;
                    }
                    this.gnome_laps = exp_dif;
                }
            },
            methods: {
            }
        })
    
    
    </script>

    </body>


























    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type = "text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</html>