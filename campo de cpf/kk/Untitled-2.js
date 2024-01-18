/*document.getElementById("myForm").addEventListener("submit", function(event){
    event.preventDefault(); // Evita o recarregamento da página

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    // Validar os campos antes de enviar

    // Exemplo: verificar se o nome foi preenchido
    if(name === ""){
        alert("Por favor, preencha o campo de nome.");
        return; // Sai da função e não submete o formulário
    }

    // Enviar os dados do formulário para algum lugar (por exemplo, um servidor)
    console.log("Nome: " + name);
    console.log("Email: " + email);
    console.log("Mensagem: " + message);

    // Reseta o formulário depois que os dados são enviados
    document.getElementById("myForm").reset();
});
*/