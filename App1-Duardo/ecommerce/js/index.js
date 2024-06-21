const tela = ['main','sobre', 'login', 'registro', 'carrinho']

function mudarTela(telaAtual, id){
    if(id == 'main'){
        if(window.innerWidth > 425){
            telaAtual.style.display = "grid";
        }
        else{
            telaAtual.style.display = "flex";
        }
    }
    else{
        telaAtual.style.display = "flex";
    }
    for(i = 0; i < 5; i++ ){
        if(id != tela[i]){
            document.getElementById(tela[i]).style.display = 'none';
        }
    }
}