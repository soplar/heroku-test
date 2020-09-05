<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include("../head.php")?>
    <title>Fietsverhuur</title>
    <script src='fietsen.js'>
    </script>
</head>
<body onload="toonFietsenImages()">
<div id="container">
    <div id="header">
        <?php include("../header.php")?>
    </div>
    <div id="menu">
        <?php include("../menu.php")?>
    </div>
    <div id="article">
        <div id="fietsenLijst"></div>
    </div>
    <div id="footer">
        <?php include("../footer.php")?>
    </div>
</div>
</body>
</html>