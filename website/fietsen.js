function toonFietsenImages(){
  // toon images op fietsenpagina
  file = "fietsen.txt"
  // haal de info op uit fietsen.txt
  fetch(file)
    .then(response => response.text())
    .then(text => {
      // selecteer de div in het formulier
      var fietsenLijst = document.querySelector("#fietsenLijst")
      // maak  fiets image en naam 
      // toegevoegen aan de div
      // opmaak regelen in css dus class toevoegen
      // regel voor regel uit txt file
      var regels = text.split('\n')
      regels.forEach((regel) =>
      {
        // een regel voor de tabel aanmaken
        // op de regel voor en na een :
        var delen = regel.split(':')
        // enkel delen[0] en delen[1] en image
        // delen[0] koppelen aan hyperlink van image (delen[0].jpg is de naam van image)
        var fiets = document.createElement("div")
        var link = document.createElement("a")
        // link.className = "imageFiets"
        link.href = "fietsenresultaat.php?fiets=" + delen[0];
        // voeg afbeelding toe (in een figure met caption)
        var fig = document.createElement("figure")
        var cap = document.createElement("figcaption")
        cap.innerHTML = delen[1]
        fig.appendChild(cap)
        var img = document.createElement("img")
        img.src =  '../images/fietsen/' + delen[0] + '.jpg' 
        img.width = 250
        link.appendChild(img)
        fig.appendChild(link)
        fiets.appendChild(fig)

        fietsenLijst.appendChild(fiets)
      })
    })  
}