
function imc() {
    var altura = Number(document.getElementById("altura").value);
    var peso = Number(document.getElementById("pesoAtual").value);
    var elemResult = document.getElementById("resultado");

   
       elemResult.innerText =  String(peso/(altura*altura));
    
}

function grafico() {
  var tricipital = Number(document.getElementById('tricipital').value);
  var supraliaca = Number(document.getElementById('suprailiaca').value);
  var quadriceps = Number(document.getElementById('quadriceps').value);
  var subescapular = Number(document.getElementById('subescapular').value);
  var abdominal = Number(document.getElementById('abdominal').value);

}