<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gekozen fiets</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .links {
            background-color: #f7941d;
            position: absolute;
            left: 0px;
            width: 50%;
        }

        .rechts {
            background-color: #e8ebf7;
            position: absolute;
            right: 0px;
            width: 50%;
            font-size: x-large;
        }
    </style>
</head>
<body>
<div id="container">
    <div id="header">
        <?php include("../header.php")?>
    </div>
    <div id="menu">
        <?php include("../menu.php")?>
    </div>
    <div id="article">
    <?php
    // maak array met de naam van de fietseigenschappen
    $naamEigenschappen = [
        "fietsnummer", "fiets", "aandrijving", "zakelijk/privé", "m/v", "soort fiets",
        "merk", "nieuw/2e hands", "kleur", "prijs", "opmerkingen"
    ];
    // controle of fiets is gekozen
    if(empty($_GET['fiets'])){
        $url = "fietsen.php";
        header("Location: $url"); 
    }else{
        $fiets = $_GET['fiets'];
        // test
        // print_r($fiets);
        // open file en zoek naar de fiets
        $regels = file("fietsen.txt");
        foreach($regels as $regel){
            // explode de regel naar een array
            $eigenschappen = explode(':',$regel);
            // test de array
            // print_r($eigenschappen);
            // trim eventuele spaties
            if(trim($eigenschappen[0]) == $fiets){
                // de fiets afbeelding
                echo "<img src='../images/fietsen/" . $fiets . ".jpg' width='500px' class='links'>";
                // toon elke gekozen fietseigenschap van de gekozen fiets
                // en elke naam van de eigenschap
                echo "<div class='rechts'>";
                for($teller = 0; $teller<11; $teller++){
                    $output = $naamEigenschappen[$teller] . " : ";
                    $output = $output . $eigenschappen[$teller] . "<br>";
                    echo $output;
                }
                // en een koop knopje
                echo "Voeg toe aan winkelwagen: <a href='winkel.php?id=$fiets'><img width='50px' src='../images/winkelwagen.png'></a>";
                echo "</div>";
                // exit foreach 
                break;
            }
        }
    }
    ?>
    </div>
    <div id="footer">
        <?php include("../footer.php")?>
    </div>
</div>
</body>
</html>