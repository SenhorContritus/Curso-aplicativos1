const container = $(".container");


function novaTarefa(){
        const nomeTarefa = $("#inputName").val();

        const tarefa = $('<div>', {
            class: 'div-tarefa'
        }).appendTo(container);

        const name = $("<p>").appendTo(tarefa).html(nomeTarefa);
        const divButtons = $("<div>", {
            class:'div-bt'
        }).appendTo(tarefa);

        const buttonC = $('<button>').appendTo(divButtons).on('click', () => {
            tarefa.toggleClass('div-tarefa-conc');
            divButtons.toggleClass('div-bt-conc');
            buttonC.remove();
        });

        const img = $("<img>", {
            'src':'./img/O.png',
            'width':'80%'
        }).appendTo(buttonC);

        const buttonE = $('<button>').appendTo(divButtons).on('click', () => {
            if(window.confirm("Deseja excluir a tarefa?")){
            tarefa.remove();
            }
        });
        
        const img2 = $("<img>", {
            'src':'./img/X.png',
            'width':'84%',
            'height':'92.5%'
        }).appendTo(buttonE);
}
