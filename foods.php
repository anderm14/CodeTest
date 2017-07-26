<?php
class foods{
    function getDescription($food_name) {
        switch ($food_name) {
            case "ice_cream" :
                $food_obj = array("name"=>"Ice Cream", "description"=>"Ice cream is smooth and cold.");
            break;
            case "pizza" :
            $food_obj = array("name"=>"Pizza", "description"=>"Pizza is spicy and hot.");
            break;
            case "lasagna":
            $food_obj = array("name"=>"Lasagna", "description"=>"Garfield loves lasagna.");
            break;
            case "chicken":
              $food_obj = array("name"=>"Chicken", "description"=>"Every pot should have a chicken.");
             break;
             default: 
             $food_obj = array("name"=>"Error 404", "description"=>"Page not found.");
           }
           return ($food_obj);
     }
}
?>