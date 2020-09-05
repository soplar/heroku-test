<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include("head.php")?>
    <title>Openingstijden</title>
</head>
<body>
<div id="container">
    <div id="header">
        <?php include("header.php")?>
    </div>
    <div id="menu">
        <?php include("menu.php")?>
    </div>
    <div id="article">
        <?php
            $openingstijden = fopen("openingstijden.txt", "r") or die("Bestand niet te openen!");
            while(!feof($openingstijden)) {
                echo fgets($openingstijden) . "<br>";
            }
            fclose($openingstijden);
        ?>
    </div>
    <div id="footer">
        <?php include("footer.php")?>
    </div> 
</div>
</body>
</html>