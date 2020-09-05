<?php
header('Content-type: text/html; charset=utf-8');
// controle of checkboxes zijn gebruikt
if(empty($_POST['fietsnamen'])){
    $url = "fietsverhuurbeheer.html";
    header("Location: $url"); 
}else{
    $fietsnamen = $_POST['fietsnamen'];
    $prijzen = $_POST['prijzen'];
    $voorraad = $_POST['voorraad'];
    
    // bepaal langste array lengte
    $lengteMax = max(count($fietsnamen), count($prijzen), count($voorraad));
    // test
    // print_r($fietsnamen);
    // print_r($prijzen);

    $nieuweVerhuurGegevens = "";
    // toon elke gekozen fiets
    for($arrayElement = 0; $arrayElement < $lengteMax; $arrayElement++){
        echo $fietsnamen[$arrayElement].":";
        echo $prijzen[$arrayElement].":";
        echo $voorraad[$arrayElement]."</br>";
        // maak de inhoud van de nieuwe file
        $nieuweVerhuurGegevens .= $fietsnamen[$arrayElement] . ":";
        $nieuweVerhuurGegevens .= $prijzen[$arrayElement]  . ":";
        $nieuweVerhuurGegevens .= $voorraad[$arrayElement];
        // zolang we niet aan het einde van de file zijn
        // willen we een nieuwe regel (niet aan het einde)
        // check op 1 meer (arrays beginnen met 0)
        if(!($arrayElement + 1 ==  $lengteMax)){
            $nieuweVerhuurGegevens = $nieuweVerhuurGegevens . "\n";
        }
    }
    // overschrijf file
    $fietsverhuur = fopen("fietsverhuur.txt", "w") or die("tekstbestand is in gebruik!");
    fwrite($fietsverhuur, $nieuweVerhuurGegevens);
    fclose($fietsverhuur);
}
