<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include("../head.php")?>
    <title>Fietsverhuur</title>
    <script src='fietsen.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="verhuur.css">
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
        <?php include("verhuur.php")?>
    </div>
    <div id="footer">
        <?php include("../footer.php")?>
    </div>
</div>
</body>
</html>