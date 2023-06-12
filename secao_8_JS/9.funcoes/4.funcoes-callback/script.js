function exibirArtigo (id, callbackSucesso, callbackErro) {
    //lógica: recuperar o id via requisição http
    if (true) {
        callbackSucesso('Funções de callback em JS', 'Funções de callback são muito utilizadas...');
    } else {
        callbackErro('Erro ao recuperar os dados');
    }
}

var callbackSucesso = function(titulo, descricao){
    console.log(titulo)
    console.log(descricao)
}
var callbackErro = function(erro) {
    console.log(erro)
}

exibirArtigo(1, callbackSucesso, callbackErro)