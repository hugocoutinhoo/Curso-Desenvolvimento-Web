
var nome = prompt('Digite seu nome: ')
var altura = Number(prompt('Digite sua altura em cm: '))
var peso = Number(prompt('Digite seu peso: '))
altura = altura / 100
var imc = peso / (altura * altura) 

document.write(`<h1>Nome: ${nome}</h1> <br>`)
document.write(`<h1>Altura: ${altura}</h1> <br>`)
document.write(`<h1>Peso: ${peso}</h1> <br>`)

if (imc < 16) {
    var classificacao = ('Baixo peso - muito grave')
} else if (imc > 16 && imc < 16.99) {
    var classificacao = ('Baixo peso - grave')
} else if (imc > 17 && imc < 18.49) {
    var classificacao = ('Baixo peso')
} else if (imc > 18.50 && imc < 24.99) {
    var classificacao = ('Peso normal')
} else if (imc > 25 && imc < 29.99) {
    var classificacao = ('Sobrepeso')
} else if (imc > 30 && imc < 34.99) {
    var classificacao = ('Obesidade grau I')
} else {
    var classificacao = ('Obesidade grau II')
}

document.write(`<h2>${nome} possui índice de massa corporal igual a ${imc}, sendo classificado como: ${classificacao}.</h2>`)
