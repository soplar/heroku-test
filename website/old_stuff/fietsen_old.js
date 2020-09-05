
function vulFietsen()
{
  file = "fietsen.txt"
  // haal de info op uit fietsen.txt
  fetch(file)
    .then(response => response.text())
    .then(text => {
      // selecteer de div in het formulier
      var fietsenLijst = document.querySelector("#fietsenLijst")
      // maak een tabel met de fiets info
      // de tabel wordt in zijn geheel toegevoegd aan de div
      var tbl = document.createElement("table")
      // regel voor regel uit txt file
      var regels = text.split('\n')
      regels.forEach((regel) =>
      {
        // een regel voor de tabel aanmaken
        var row = document.createElement("tr")
        // op de regel voor en na een :
        var delen = regel.split(':')
        let i = 0
        // er zijn 11 delen op de regel
        for(i; i<11; i++){
          // maak checkbox enkel voor 1e deel
          if(i == 0){
            var check = document.createElement("INPUT")
            check.setAttribute("type", "checkbox")
            check.value = delen[i]
            check.id = delen[i]
            check.name = "fietsen[]"
          }
          var label = document.createElement("LABEL")
          label.setAttribute("htmlFor", delen[i])
          // toon de inhoud van fietsen.txt
          label.innerHTML = delen[i]
          // maak een eerste cel voor de regel
          var cell = document.createElement("td")
          // voeg de check en label toe
          if(i == 0){cell.appendChild(check)}            
          cell.appendChild(label)
          // voeg delen toe aan regel
          row.appendChild(cell)
        }
        // voeg afbeelding toe
        var img = document.createElement("img")
        img.src =  '../images/fietsen/' + delen[0] + '.jpg' 
        img.width = 100
        var cell = document.createElement("td")
        cell.appendChild(img)
        row.appendChild(cell)
        // voeg regel toe aan tabel
        tbl.appendChild(row)
      })
      fietsenLijst.appendChild(tbl)
    })
}