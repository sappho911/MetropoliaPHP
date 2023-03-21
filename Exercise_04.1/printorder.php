<?php
    $drink = $_GET['drink'];
    $value = $_GET['sugar'];

    if($value == 1)
    {
        if($drink == "tea")
        {
            echo "Tea with sugar!";
        }
        elseif($drink == "coffee")
        {
           echo "Coffee with sugar!";
        }
    }
    elseif($value == 2)
    {
        if($drink == "tea")
        {
            echo "Tea without sugar.";
        }
        elseif($drink == "coffee")
        {
           echo "Coffee without sugar.";
        }
      
    }
?>