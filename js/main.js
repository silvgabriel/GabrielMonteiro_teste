

//*************************************** FUNCTION PARA CHECAR FORMULARIO CAD MOTORISTA ***************************************
function checkformMT(){
  var inputs = document.getElementsByClassName('required');
  var len = inputs.length;
  var valid = true;

  for(var i=0; i < len; i++){
    if (!inputs[i].value){
      valid = false; 
    } 
  }
  if ((document.form1.mtsexo[0].checked == false && document.form1.mtsexo[1].checked == false) || (document.form1.mtstatus[0].checked == false && document.form1.mtstatus[1].checked == false)) {
    valid = false;
  }

  if (!valid){
    alert('Por favor preencha todos os campos.');
    return false;
  }else{
        return true;
  }
}

//*************************************** FUNCTION PARA CHECAR FORMULARIO CAD PASSAGEIRO} ***************************************
function checkformPS(){
  var inputs = document.getElementsByClassName('required');
  var len = inputs.length;
  var valid = true;

  for(var i=0; i < len; i++){
    if (!inputs[i].value){
      valid = false; 
    } 
  }


  if ((document.form1.pssexo[0].checked == false && document.form1.pssexo[1].checked == false)) {
    valid = false;
  }

  if (!valid){
    alert('Por favor preencha todos os campos.');
    return false;
  }else{
        return true;
  }
}


//*************************************** FUNCTION PARA CHECAR FORMULARIO CAD CORRIDA ***************************************
function checkformCR(){
  var inputs = document.getElementsByClassName('required');
  var len = inputs.length;
  var valid = true;
  var getValor1 = document.getElementById("getValor1").value;
  var getValor2 = document.getElementById("getValor2").value;
  for(var i=0; i < len; i++){
    if (!inputs[i].value){
      valid = false; 
    } 
  }

if(getValor1 == "" || getValor2 == ""){
valid = false; 
  
}

  if (!valid){
    alert('Por favor preencha todos os campos.');
    return false;
  }else{
        return true;
  }
}


//*************************************** FUNCTION CANCELA E RETORNA PARA INDEX ****************************************************
function retornaIndex(){
window.location.href = 'index.html';
}





