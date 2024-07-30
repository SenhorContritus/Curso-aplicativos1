let operacao = " "
let ultimaOP = " "


function insert(num){
    
    if(ultimaOP == "+" || ultimaOP == "-" || ultimaOP == "*" || ultimaOP == "/"){
        allClean()       
    }
    let numero = document.getElementById("resultado").innerHTML
    if(numero == "ERROR"){
        operacao = " "
        numero = numero.substring(5)
    }
    if(numero == "NaN"){
        operacao = " "
        numero = numero.substring(3)
    }
    
    document.getElementById("resultado").innerHTML = numero+num
    if(numero.length > 13){
        document.getElementById("resultado").innerHTML = numero.substring(0, resultado.length = 13)
    }
    ultimaOP = num
    operacao = operacao + num
    console.log(operacao)
}

function clean(){
    let resultado = document.getElementById("resultado").innerHTML
    document.getElementById("resultado").innerHTML = resultado.substring(0, resultado.length -1)
    operacao = document.getElementById("resultado").innerHTML
}

function allClean(bt){
    document.getElementById("resultado").innerHTML = ""
    if(bt == 1){
        operacao = " "
    }   
}

function equal(){
    let res = document.getElementById("resultado")
    let resultado = res.innerHTML
    if(resultado){
        try {
            res.innerHTML = eval(operacao)
            resultado = res.innerHTML
            if(resultado.length > 14){
                document.getElementById("resultado").innerHTML = resultado.substring(0, 10)
                console.log(resultado.length)   
            }
        } catch (ERROR) {
            res.innerHTML = "ERROR"
        }
        
        
        let numero = document.getElementById("resultado").innerHTML
        operacao = numero
    }  
}   