var num1 = Number(prompt('Digite um número: '))
var operacao = prompt('Digite a operação + ou -: ')
var num2 = Number(prompt('Digite outro número: '))

function calculo(num1, num2, operacao) {
    var resultado = 0

    if (operacao == '+') {
        resultado = num1 + num2
    } else if (operacao == '-') {
        resultado = num1 - num2
    }

    return resultado;
}

document.write(`O resultado é: ${calculo(num1, num2, operacao)}`)