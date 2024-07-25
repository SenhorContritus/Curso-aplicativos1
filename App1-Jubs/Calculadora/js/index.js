let numAtual = 0;
let memoria = 0;
let ultimaOP = 0;

function insert(num){
    numAtual = numAtual*10 + num;
    document.getElementById("resultado").innerHTML = numAtual;
}