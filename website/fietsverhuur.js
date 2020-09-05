function vulFietsVerhuur()
{
  file = "fietsverhuur.txt"
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
          // maak checkbox
          var check = document.createElement("INPUT")
          check.setAttribute("type", "checkbox")
          check.value = delen[0]
          check.id = delen[0]
          check.name = "fietsen[]"
          var label1 = document.createElement("LABEL")
          label1.setAttribute("htmlFor", delen[0])
          label1.innerHTML = delen[0]
          // maak een eerste cel voor de regel
          var cell1 = document.createElement("td")
          // voeg de check en label toe
          // maak checkboxcontainer voor checkbox en label om ze naast elkaar te plaatsen
          // met css: .checkbox-container{display:flex;}
          var divCheckboxContainer = document.createElement("div")
          divCheckboxContainer.classList.add("checkbox-container")
          divCheckboxContainer.appendChild(check)
          divCheckboxContainer.appendChild(label1)
          cell1.appendChild(divCheckboxContainer)
          // row.appendChild(cell1)
          // cell1.appendChild(check)
          // cell1.appendChild(label1)
          row.appendChild(cell1)
          // maak tweede label met enkel prijs per tijd
          var label2 = document.createElement("LABEL")
          label2.setAttribute("htmlFor", delen[1])
          label2.innerHTML = delen[1]
          // maak tweede cel en voeg tweede label toe
          var cell2 = document.createElement("td")
          cell2.appendChild(label2)
          row.appendChild(cell2)
          // regel toevoegen aan tabel
          tbl.appendChild(row)
        })
      fietsverhuurLijst.appendChild(tbl)
    })
}