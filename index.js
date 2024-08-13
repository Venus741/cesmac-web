//Função limpa campo de input quando chamada
function limpar_campo() {
    let campo = document.querySelectorAll('.inputs');
    campo.forEach(function(input) {
        input.value = '';        
    })
}