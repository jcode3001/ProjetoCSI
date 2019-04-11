function clicar(){
	var num1 = document.querySelector("#altura").value;
	var num2 = document.querySelector("#peso").value;
	var resultado = parseInt(num1) * parseInt(num2);
	document.querySelector(".resultado").innerHTML = resultado;

}

function imc1() {
    var altura = Number(document.getElementById("#altura").value);
    var peso = Number(document.getElementById("#pesoAtual").value);
    var elemResult = document.getElementById(".imc");

   
       elemResult.innerText =  String(peso/(altura*altura));
    
}

function imc() {
    var altura = Number(document.getElementById("altura").value);
    var peso = Number(document.getElementById("pesoAtual").value);
    var elemResult = document.getElementById("resultado");

   
       elemResult.innerText =  String(peso/(altura*altura));
    
}