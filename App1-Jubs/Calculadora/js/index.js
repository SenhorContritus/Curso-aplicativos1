let numero = 0;
        let ultimaOp;
        let memoria = 0;
        let resultado = 0;
        function insert(num){
            if(num == "+" || num == "-" || num == "*" || num == "/"){
                
            }
            numero = document.getElementById('resultado').innerHTML;
            document.getElementById('resultado').innerHTML = numero + num;
        }
        function allClean(){
            memoria = 0;
            document.getElementById('resultado').innerHTML = "";
        }
        function clean(){
            resultado = document.getElementById('resultado').innerHTML;
            document.getElementById('resultado').innerHTML = resultado.substring(0, resultado.length -1);
        }

        function equal(){
            resultado = document.getElementById('resultado').innerHTML;
            if(resultado){
                document.getElementById('resultado').innerHTML = eval(resultado);
                memoria = resultado;
            }
            else{
                resultado = document.getElementById('resultado').innerHTML = "";
            }
            
        }