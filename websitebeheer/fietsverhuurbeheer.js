function wijzigFietsVerhuur()
{
  file = "../website/fietsverhuur.txt"
  // haal de info op uit fietsverhuur.txt
  fetch(file)
    .then(response => response.text())
    .then(text => {
      // selecteer de div in het formulier
      var fietsverhuurLijst = document.querySelector("#fietsverhuurLijst")
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
          // maak input1 (fietsnamen)
          var input1 = document.createElement("INPUT")
          input1.setAttribute("type", "text")
          input1.value = delen[0]
          input1.name = "fietsnamen[]"
          // maak een eerste cel voor de regel
          var cell1 = document.createElement("td")
          // voeg de check en label toe
          cell1.appendChild(input1)
          row.appendChild(cell1)
          // maak input2 (prijzen)
          var input2 = document.createElement("INPUT")
          input2.setAttribute("type", "text")
          input2.value = delen[1]
          input2.name = "prijzen[]"
          // maak een tweede cel voor de regel
          var cell2 = document.createElement("td")
          // voeg de check en label toe
          cell2.appendChild(input2)
          row.appendChild(cell2)
          // maak input3 (voorraad)
          var input3 = document.createElement("INPUT")
          input3.setAttribute("type", "text")
          input3.value = delen[2]
          input3.name = "voorraad[]"
          // maak een tweede cel voor de regel
          var cell3 = document.createElement("td")
          // voeg de check en label toe
          cell3.appendChild(input3)
          row.appendChild(cell3)

          tbl.appendChild(row)
        })
      fietsverhuurLijst.appendChild(tbl)
    })
}