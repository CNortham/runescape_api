<?php
include("includes/errors.php");

//Account Not Found//

if($account_found == 1){
    $show = "hidden";
    //echo "Account Found";
}elseif($account_found == 0){
    if(empty($_GET['username'])){
        $show = "hidden";
        //echo "Entry Empty";
    }elseif(!empty($_GET['username'])){
        $show = "";
        //echo "Account Not Found";
    }
}else{
    $show = "";
    //echo "Account Not Found";
}
?>