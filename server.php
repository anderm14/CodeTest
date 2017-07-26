<?php

include ("foods.php");
include ("users.php");


$result = array("result"=>"success");
if (isset($_POST["action"]) && !empty($_POST['action'])) {
    switch ($_POST["action"]) {
        case "parse_user_info" : 
          $user = new users;
          $result = $user->parse_user_info($_REQUEST["userInfo"]);
        break;

    }
}
echo (json_encode($result));
?>