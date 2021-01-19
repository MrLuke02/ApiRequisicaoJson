
var carro;

let numCarro;

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var carro = JSON.parse(this.responseText);
    let tamanho = JSON.stringify(carro);
    console.log(tamanho);

    for (let i = 1; i <= 4; i++) {
        numCarro = 'carro' + i;
        console.log(numCarro);
        document.getElementById(numCarro).innerHTML = carro[i].Modelo;

    }


  }
};
xmlhttp.open("POST", "controller/data.json", true);
xmlhttp.send(); 




