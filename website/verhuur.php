<?php
// controle of checkboxes zijn gebruikt
if(empty($_POST['fietsen'])){
    $url = "fietsverhuur.html";
    header("Location: $url"); 
}else{
    $fietsen = $_POST['fietsen'];
    $aantalFietsen = count($fietsen);
?>
<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_checkout_form -->
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="verhuurd.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Adres</h3>
            <label for="fname"><i class="fa fa-user"></i> Naam</label>
            <input type="text" id="fname" name="firstname" placeholder="Jan Jansen">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="gerard@voorbeeld.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Adres</label>
            <input type="text" id="adr" name="address" placeholder="parklaan 4">
            <label for="city"><i class="fa fa-institution"></i> Stad</label>
            <input type="text" id="city" name="city" placeholder="Eindhoven">
            <div class="row">
                <div class="col-50">
                <label for="zip">Postcode</label>
                <input 
                  type="text" 
                  pattern="[1-9][0-9]{3}\s?[A-Za-z]{2}" 
                  id="zip" 
                  name="zip" 
                  placeholder="5647 VV">
                </div>
            </div>
            </div>         
        </div>
        <?php
          foreach($fietsen as $fiets){
              echo "<input type='hidden' value=$fiets name='fietsen[]'>";
          }
        ?>
        <input type="submit" value="gegevens versturen" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>
          Te huren: 
          <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> 
          <b><?=$aantalFietsen?></b>
          </span>
      </h4>
      <?php
            // test
            // print_r($fietsen);
            // toon elke gekozen fiets
            foreach($fietsen as $fiets){
                echo "<p><span>" . $fiets ."</span></p>";
            }
        }
      ?>
    </div>
  </div>
</div>