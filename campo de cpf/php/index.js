/*
function validarFormulario(){
    var nome = document.getElementById("nome").value;
    var sobrenome = document.getElementById("sobrenome").value;
    var data = document.getElementById("data").value;
    var cpf = document.getElementById("cpf").value;


    if(nome === " " || sobrenome === " " || data === " " || cpf === " " ){
        alert("Por favor, preencha todos os campos.");
        return false; 
    };

    console.log("Nome: " + nome);
    console.log("Sobrenome:" + sobrenome);
    console.log("Data: " + data);
    console.log("CPF: " + cpf);

    document.getElementsById("MeuFormulario").submit();
};*/ 

 document.getElementById("MeuFormulario"), document.addEventListener("submit", function (event){
    event.preventDefault(); 
    

    var nome = document.getElementById("nome").value;
    var sobrenome = document.getElementById("sobrenome").value;
    var data = document.getElementById("data").value;
    var cpf = document.getElementById("cpf").value;

    if(nome === "" || sobrenome === "" || data === "" || cpf === "" ){
        alert("Por favor, preencha todos os campos.");
        return false; 
    }

    console.log("Nome: " + nome);
    console.log("Sobrenome: " + sobrenome);
    console.log("Data: " + data);
    console.log("CPF: " + cpf);
    
    document.getElementById("MeuFormulario").submit(); 
    
});
function is_cpf (c) {

    if((c = c.replace(/[^\d]/g,"")).length != 11)
      return false
  
    if (c == "00000000000")
      return false;
  
    var r;
    var s = 0;
  
    for (i=1; i<=9; i++)
      s = s + parseInt(c[i-1]) * (11 - i);
  
    r = (s * 10) % 11;
  
    if ((r == 10) || (r == 11))
      r = 0;
  
    if (r != parseInt(c[9]))
      return false;
  
    s = 0;
  
    for (i = 1; i <= 10; i++)
      s = s + parseInt(c[i-1]) * (12 - i);
  
    r = (s * 10) % 11;
  
    if ((r == 10) || (r == 11))
      r = 0;
  
    if (r != parseInt(c[10]))
      return false;
      return true;
}
function fMasc(objeto,mascara) {
    obj=objeto
    masc=mascara
    setTimeout("fMascEx()",1)
    }
    
      function fMascEx() {
    obj.value=masc(obj.value)
    }
    
    function mCPF(cpf){
    cpf=cpf.replace(/\D/g,"")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
    cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
    return cpf
    }
    
    cpfCheck = function (el) {
        document.getElementById('cpfResponse').innerHTML = is_cpf(el.value)? '<span style="color:green">válido</span>' : '<span style="color:red">inválido</span>';
        if(el.value=='') document.getElementById('cpfResponse').innerHTML = '';
    }

function adicionarCampo() {
    var novoCampu = document.createElement("input");   
    novoCampu.type = "text";
    novoCampu.name = "nome";
    novoCampu.className = "Nome:" + (novoCampu.childElementCount + 1);

    var novoCampe = document.createElement("input");   
    novoCampe.type = "text";
    novoCampe.name = "sobrenome";
    novoCampe.className = "Sobrenome:" + (novoCampe.childElementCount + 1);

    var novoCamp = document.createElement("input");
    novoCamp.type = "date";
    novoCamp.name = "data";
    novoCamp.className = "Data:" + (novoCamp.childElementCount + 1);
    
    var novoCampo = document.createElement("input");
    novoCampo.type = "text";
    novoCampo.name = "cpf";
    novoCampo.className = "CPF:" + (novoCampo.childElementCount + 1);

   document.getElementById('div_nome').append(novoCampu);
   document.getElementById('div_sobrenome').append(novoCampe);
   document.getElementById('div_data').append(novoCamp);
   document.getElementById('div_cpf').append(novoCampo);

  };