<!-- overgenomen van https://www.w3schools.com/howto/howto_css_responsive_form.asp -->
<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include("../head.php")?>
    <title>Contact pagina</title>
    <link rel="stylesheet" href="contact.css">
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
        <div class="container">
            <form action="contactverwerk.php">
                <div class="row">
                <div class="col-25">
                    <label for="fname">Voornaam</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Uw naam..">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="lname">Achternaam</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Uw achternaam..">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="email">email</label>
                </div>
                <div class="col-75">
                    <input type="email" id="email" name="email" placeholder="Uw email..">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="onderwerp">Uw vraag:</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="onderwerp" placeholder="Hier kunt u uw tekst typen.." style="height:200px"></textarea>
                </div>
                </div>
                <div class="row">
                <input type="submit" value="Verstuur uw vraag">
                </div>
            </form>
        </div>
    </div>
    <div id="footer">
        <?php include("../footer.php")?>
    </div>
</div>
</body>
</html>