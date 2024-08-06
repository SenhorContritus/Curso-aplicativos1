function getnome(){
    let novoparagrafo = document.createElement('p');
    novoparagrafo.textContent = 'Este é um novo parágrafo';

    let container = document.getElementsByTagName('p')[0];
    container.appendChild(novoparagrafo);

    let div = document.createElement('div');
    let p = document.createElement('p');
    div.appendChild(p);
    container.appendChild(div);
}

// if(confirm("Você deseja mesmo criar um novo parágrafo?")){
    // let container = document.getElementsByTagName('body')[0];
    // container.appendChild(novoparagrafo);
// }