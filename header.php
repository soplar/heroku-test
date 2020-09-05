<?php
    if(substr(getcwd(),-7) == "website"){
        $website = "../";
    }elseif(substr(getcwd(),-6) == "beheer"){
        $website = "../";
    }else{
        $website = "";
    }
?>
<div id="header">
    <img class="headerElement" src="<?=$website ?>images/logo.png" width="100px" alt="De Fluitende Fietser">
    <div class="headerElement" id="winkelNaam">De Fluitende Fietser</div>
    <form class="headerElementRight" action="zoekresultaat.php" method="get">
        <input class="headerElementRight" type="search" name="q">
        <img class="headerElementRight" src="<?=$website ?>images/zoek.png" width="80px" alt="zoek">
    </form>
    <script>
        function zoek() {
            let zoekTekst = document.querySelector("q").innerHTML
            zoekTekst:arguments('')
            $(".searchText:contains('" + searchText + "')").css("background","#FF0");
    }
</script>
</div>