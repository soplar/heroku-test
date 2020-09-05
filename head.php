<?php
// check waar we zijn en pas eventueel pad aan
    if(substr(getcwd(),-7) == "website"){
        $index = "../";
        $website = "";
    }elseif(substr(getcwd(),-6) == "beheer"){
        $index = "../";
        $website = "";
    }else{
        $index = "";
        $website = "website/";
    }
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<link rel="stylesheet" href="<?=$index ?>style.css">
