<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fietsverhuur</title>
    <script src='fietsen.js'>
    </script>
    <link rel="stylesheet" href="../style.css">
</head>
<body onload="toonFietsenImages()">
    <div id="header">
        <?php include("../header.php")?>
    </div>
    <div id="menu">
        <?php include("../menu.php")?>
    </div>
    <div id="article">
      <form action="fietsen.php" id="formfietsen" method="post">
        <div id="fietsenLijst"></div>
        <input type="submit" value="Submit">
      </form>
    </div>
    <div id="footer">
        <?php include("../footer.html")?>
    </div>
</body>
</html>