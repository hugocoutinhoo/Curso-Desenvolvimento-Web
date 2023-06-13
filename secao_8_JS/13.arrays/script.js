// -------------------- Arrays Básico
// var lista_frutas = Array()
/*
var lista_frutas = []

    lista_frutas[0] = 'Banana'
    lista_frutas[1] = 'Maçã'
    lista_frutas[2] = 'Morango'
    lista_frutas[3] = 'Uva'
    lista_frutas[4] = 'Cajá'

console.log(lista_frutas)


// var lista_frutas = Array('Banana', 'Maçã', 'Morango', 'Uva')

var lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva']

console.log(lista_frutas[])
*/

// ------------- Arrays Multidimensionais
/*
var listas_coisas = Array()

listas_coisas['frutas'] = Array('Banana','Maçã','Morango','Uva','Cajá')
listas_coisas['pessoas'] = Array('Monique', 'Laura', 'Geraldo', 'Roberto', 'Yasmin')


console.log(listas_coisas['frutas'][3])
console.log(listas_coisas['pessoas'][3])
*/

// ------------- Métodos de inclusão e exclusão de elementos
/*
var lista_frutas = Array()

lista_frutas[0] = 'Banana'
lista_frutas[1] = 'Maçã'
// incluir elemento no final do array
lista_frutas.push('Laranja')
// incluir elemento no início do array
lista_frutas.unshift('Graviola')
// excluir elemento no final do array
lista_frutas.pop()
// excluir elemento no início do array
lista_frutas.shift()

console.log(lista_frutas)
*/

// ------------ Método de pesquisa
/*
var lista_frutas = Array('Banana','Maçã','Morango','Uva','Cajá')

console.log(lista_frutas.indexOf('Morango'))
*/

// ------------ Ordenação de elementos

var lista_frutas = Array('Banana','Maçã','Morango','Uva','Cajá')
var lista_numeros = Array(10,54,23,2,7)

console.log(lista_frutas.sort())
console.log(lista_numeros.sort(ordenaNumeros))

function ordenaNumeros (a, b) {
    return a - b
}



