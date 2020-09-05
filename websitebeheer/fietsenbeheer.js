function wijzigFietsen()
{
  file = "../website/fietsen.txt"
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
          delen.forEach((deel)=>{
            let input = document.createElement("INPUT")
            input.value = deel
            input.name = "kol" + deel + "[]"
            // maak een eerste cel voor de regel
            let cell = document.createElement("td")
            // voeg toe aan cell
            cell.appendChild(input)
            // voeg toe aan row
            row.appendChild(cell)
          })
          tbl.appendChild(row)
        })
      fietsenLijst.appendChild(tbl)
    })
}