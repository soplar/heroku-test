<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include("../head.php")?>
    <title>Website fietsenhandelaar</title>
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
            $fietsen = $_GET["fietsen"]; 
            // print_r($fietsen);
            $bestandVerhuren = fopen("verhuurd.txt", "a") or die("Unable to open file!");
            $txt = "=====\n";
            foreach ($_GET as $key => $value) {
                if(is_array($value)){
                    foreach($fietsen as $fiets){
                        $txt = $txt . $fiets . "\n";         
                    }
                }else{
                    $txt = $txt . $key . ": " . $value . "\n";
                }                       
            }
            $txt = $txt . "\n=====\n";
            fwrite($bestandVerhuren, $txt);
            fclose($bestandVerhuren);
        ?>
        Uw gegevens zijn verstuurd.
    </div>
    <div id="footer">
        <?php include("../footer.html")?>
    </div> 
</div>
</body>
</html>