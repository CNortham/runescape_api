<?php
error_reporting(0);
include("includes/account_information.php");
include("includes/quest_requirements.php");
include("includes/errors.php");
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
                    <h1 <?php echo (empty($_POST) || $account_found == 1 ? "hidden" : ""); ?>>Account Not Found</h1>

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
            </div>
            <div class="col-sm">
            <!--Hitpoints-->
                <img class="icons" src="img/skill_icons/Hitpoints_icon.png" alt="Hitpoints"> 
                <?php echo $skill_hitpoints_attributes[1]; ?> 
            </div>
            <div class="col-sm">
            <!--Mining-->
                <img class="icons" src="img/skill_icons/Mining_icon.png" alt="Mining"> 
                <?php echo $skill_mining_attributes[1]; ?> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
            <!--Strength-->
                <img class="icons" src="img/skill_icons/Strength_icon.png" alt="Strength"> 
                <?php echo $skill_strength_attributes[1]; ?> 
            </div>
            <div class="col-sm">
            <!--Agility-->
                <img class="icons" src="img/skill_icons/Agility_icon.png" alt="Agility"> 
                <?php echo $skill_agility_attributes[1]; ?>
            </div>
            <div class="col-sm">
            <!--Smithing-->
                <img class="icons" src="img/skill_icons/Smithing_icon.png" alt="Smithing"> 
                <?php echo $skill_smithing_attributes[1]; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
            <!--Defence-->
                <img class="icons" src="img/skill_icons/Defence_icon.png" alt="Defence"> 
                <?php echo $skill_defence_attributes[1]; ?>
            </div>
            <div class="col-sm">
            <!--Herblore-->
                <img class="icons" src="img/skill_icons/Herblore_icon.png" alt="Herblore"> 
                <?php echo $skill_herblore_attributes[1]; ?>
            </div>
            <div class="col-sm">
            <!--Fishing-->
                <img class="icons" src="img/skill_icons/Fishing_icon.png" alt="Fishing"> 
                <?php echo $skill_fishing_attributes[1]; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
            <!--Ranging-->
                <img class="icons" src="img/skill_icons/Ranged_icon.png" alt="Ranging"> 
                <?php echo $skill_ranged_attributes[1]; ?>
            </div>
            <div class="col-sm">
            <!--Thieving-->
                <img class="icons" src="img/skill_icons/Thieving_icon.png" alt="Thieving"> 
                <?php echo $skill_thieving_attributes[1]; ?>
            </div>
            <div class="col-sm">
            <!--Cooking-->
                <img class="icons" src="img/skill_icons/Cooking_icon.png" alt="Cooking"> 
                <?php echo $skill_cooking_attributes[1]; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
            <!--Prayer-->
                <img class="icons" src="img/skill_icons/Prayer_icon.png" alt="Prayer"> 
                <?php echo $skill_prayer_attributes[1]; ?>
            </div>
            <div class="col-sm">
            <!--Crafting-->
                <img class="icons" src="img/skill_icons/Crafting_icon.png" alt="Crafting"> 
                <?php echo $skill_crafting_attributes[1]; ?>
            </div>
            <div class="col-sm">
            <!--Firemaking-->
                <img class="icons" src="img/skill_icons/Firemaking_icon.png" alt="Firemaking"> 
                <?php echo $skill_firemaking_attributes[1]; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
            <!--Magic-->
                <img class="icons" src="img/skill_icons/Magic_icon.png" alt="Magic"> 
                <?php echo $skill_magic_attributes[1]; ?>
            </div>
            <div class="col-sm">
            <!--Fletching-->
                <img class="icons" src="img/skill_icons/Fletching_icon.png" alt="Fletching"> 
                <?php echo $skill_fletching_attributes[1]; ?>
            </div>
            <div class="col-sm">
            <!--Woodcutting-->
                <img class="icons" src="img/skill_icons/Woodcutting_icon.png" alt="Woodcutting"> 
                <?php echo $skill_woodcutting_attributes[1]; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
            <!--Runecrafting-->
                <img class="icons" src="img/skill_icons/Runecraft_icon.png" alt="Runecrafting"> 
                <?php echo $skill_runecrafting_attributes[1]; ?>
            </div>
            <div class="col-sm">
            <!--Slayer-->
                <img class="icons" src="img/skill_icons/Slayer_icon.png" alt="Slayer"> 
                <?php echo $skill_slayer_attributes[1]; ?>
            </div>
            <div class="col-sm">
            <!--Farming-->
                <img class="icons" src="img/skill_icons/Farming_icon.png" alt="Farming"> 
                <?php echo $skill_farming_attributes[1]; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
            <!--Construction-->
                <img class="icons" src="img/skill_icons/Construction_icon.png" alt="Construction"> 
                <?php echo $skill_construction_attributes[1]; ?>
            </div>
            <div class="col-sm">
            <!--Hunter-->
                <img class="icons" src="img/skill_icons/Hunter_icon.png" alt="Hunter"> 
                <?php echo $skill_hunter_attributes[1]; ?>
            </div>
            <div class="col-sm">
            <!--Empty (total level)-->
            </div>
        </div>
    </div>

    <!---->
    <div class="container" id="options">
            <div class="row">
            <div class="col-lg-6">
                    <button v-on:click='questClick'>Quests</button>
                </div>
                <div class="col-lg-6">
                    <button v-on:click='skillcalClick'>Skills Calculator</button>
                </div>
            </div>
        </div>

    <script>
        new Vue({
            el: '#options',
            data: {
                message: 'Hello'
            },
            methods: {
                questClick: function(){

                },
                skillcalClick: function(){

                }
            }
        })
    </script>

    </body>


























    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type = "text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</html>