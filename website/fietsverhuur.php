<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include("../head.php")?>
    <title>Fiets verhuur</title>
    <script src='fietsverhuur.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="verhuur.css">
</head>
<body onload="vulFietsVerhuur()">
<div id="container">
    <div id="header">
        <?php include("../header.php")?>
    </div>
    <div id="menu">
        <?php include("../menu.php")?>
    </div>
    <div id="article">
      <form action="fietsverhuurresultaat.php" id="formverhuur" method="post">
        <div id="fietsverhuurLijst"></div>
        <input type="submit" value="Huur de fietsen" class="btn">
      </form>
    </div>
    <div id="footer">
        <?php include("../footer.php")?>
    </div> 
</div>
</body>
</html>