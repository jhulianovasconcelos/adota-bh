document.addEventListener('onload', getBreedList());

function httpGet(theUrl) {
  let xmlHttp = new XMLHttpRequest();
  xmlHttp.open("GET", theUrl, false);
  xmlHttp.send(null);
  return xmlHttp.responseText;
}

function getBreedList() {
  const breeds = document.querySelector("#petBreed");
  let breedsJson = httpGet('https://dog.ceo/api/breeds/list/all');
  let breedsArray = JSON.parse(breedsJson);
  breedsArray = breedsArray.message;

  for (breed in breedsArray) {
    if (breedsArray[breed].length <= 0) {
      let breedOption = document.createElement('option');
      breedOption.textContent = textFormer(breed);
      breedOption.setAttribute('value', breed);
      breeds.appendChild(breedOption);
    }
    else {
      let breedOption = document.createElement('option');
      breedOption.textContent = textFormer(breed)
      breedOption.setAttribute('value', breed.toLowerCase());
      breeds.appendChild(breedOption);

      for (i = 0; i < breedsArray[breed].length; i++) {
        let breedOption = document.createElement('option');
        let fullBreedName = textFormer(breed) + " " + textFormer(breedsArray[breed][i]);
        breedOption.textContent = fullBreedName;
        breedOption.setAttribute('value', fullBreedName.toLowerCase());
        breeds.appendChild(breedOption);
      }
    }
  }


}
function textFormer(texto) {
  let text = texto.slice(1)
  return texto[0].toUpperCase() + text
}


