<?php
include("includes/account_information.php");
include("includes/quest_requirements.php");
include("includes/errors.php");
?>
<html>
    <head>
    <title>Runescape API</title>
    </head>
    <body>

    <!--Search Bar-->
    <form style="margin-top:30px;" action="">
        <div class="container">
            <div class="row" id="search">
                <div class="col-lg-6 mx-auto">
                    <h1 <?php echo ($account_result == 1 ? "hidden" : ""); ?>>Please Enter Username</h1>
                    <h1 <?php echo ($account_found == 1 ? "hidden" : ""); ?>>Account Not Found</h1>
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
            <div class="row" id="search">
                <div class="col-lg-6 mx-auto">
                    <h1 <?php echo ($account_result == 1 ? "hidden" : ""); ?>>Please Enter Username</h1>
                    <h1 <?php echo ($account_found == 1 ? "hidden" : ""); ?>>Account Not Found</h1>
                <div class="input-group">
                    <input type="text" class="form-control" name="username" value="<?php echo $_GET['username']; ?>">
                    <span class="input-group-btn">
                    <input class="btn btn-secondary" type="submit" value="Search">
                    </span>
                </div>
                </div>
            </div>
        </div>
    </body>

























    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type = "text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</html>