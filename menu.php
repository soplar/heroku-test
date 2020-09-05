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
<div class="menu">
    <div class="hamburger"><img class="rotate" src="<?=$index ?>images/logo20x20.png">☰</div>
    <ul>
        <li><a href="<?=$index ?>index.php">Home</a></li>
        <li><a href="<?=$website ?>fietsen.php">Fietsen</a></li>
        <li><a href="<?=$website ?>fietsverhuur.php">Fietsverhuur</a></li>
        <li><a href="<?=$website ?>contact.php">Contact</a></li>
        <li><a href="<?=$index ?>openingstijden.php">Openingstijden</a></li>
        <li><a href="<?=$index ?>overons.php">Over ons</a></li>
    </ul>
</div>
<script>
    let hamburger = document.querySelector(".hamburger")
    let menu = document.querySelector(".menu")
    let rotate = document.querySelector(".rotate")
    let test = document.querySelector("#fietsenlijst")
    hamburger.addEventListener("click", ()=>{
        menu.classList.toggle("expandMenu")
        rotate.classList.toggle("rotateBtn")
    }, false)
</script>