<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include("../head.php")?>
    <title>Contact verwerkt</title>
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
            $bestandContact = fopen("contact.txt", "a") or die("Bestand niet te openen!");
            $txt = "=====\n";
            foreach ($_GET as $key => $value) {
                $txt = $txt . $key . ": " . $value . "\n";                       
            }
            $txt = $txt . "\n=====\n";
            fwrite($bestandContact, $txt);
            fclose($bestandContact);
        ?>
        Uw opmerking is ontvangen.
    </div>
    <div id="footer">
        <?php include("../footer.html")?>
    </div>
</div>
</body>
</html>