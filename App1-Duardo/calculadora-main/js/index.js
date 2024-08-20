var conta = " "
var ultimoNum = " "

document.addEventListener("keydown", (event) => {
    var tecla = event.key
    if(parseInt(tecla)){
        insert(event.key)
    }if(tecla == "0" || tecla == "+" || tecla == "-" || tecla == "/" || tecla == "*" || tecla == "." || tecla == "°"){
        insert(tecla)
    }
    if(tecla == "Backspace"){
        back()
    }
    if(tecla == "Enter"){
        igual()
    }
    if(tecla == "Delete"){
        c()
    }
})

function insert(num){
    
    if(ultimoNum == "+" || ultimoNum == "-" || ultimoNum == "*" || ultimoNum == "/"){
        c()       
    }
    var numero = document.getElementById("resultado").innerHTML
    if(numero == "error"){
        conta = " "
        numero = numero.substring(5)
    }
    if(numero == "NaN"){
        conta = " "
        numero = numero.substring(3)
    }
    
    document.getElementById("resultado").innerHTML = numero+num
    if(numero.length > 14){
        document.getElementById("resultado").innerHTML = numero.substring(0, resultado.length = 10)
    }
    ultimoNum = num
    conta = conta + num
    console.log(conta)
}

function back(){
    var resultado = document.getElementById("resultado").innerHTML
    document.getElementById("resultado").innerHTML = resultado.substring(0, resultado.length -1)
    conta = document.getElementById("resultado").innerHTML
}

function c(bt){
    document.getElementById("resultado").innerHTML = ""
    if(bt === 1){
        conta = " "
    }   
}

function igual(){
    var res = document.getElementById("resultado")
    var resultado = res.innerHTML
    if(resultado){
        try {
            res.innerHTML = eval(conta)
            resultado = res.innerHTML
            if(resultado.length > 14){
                document.getElementById("resultado").innerHTML = resultado.substring(0, 10)
                console.log(resultado.length)   
            }
        } catch (error) {
            res.innerHTML = "error"
        }
        
        
        var numero = document.getElementById("resultado").innerHTML
        conta = numero
    }  
}   