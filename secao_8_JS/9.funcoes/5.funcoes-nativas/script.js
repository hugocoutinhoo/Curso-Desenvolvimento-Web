// Funções nativas para manipular strings

// * atributo -> length

var nome = 'Jorge Sant Ana'
console.log(nome.length) // 14
console.log(nome.charAt(4)) // e
console.log(nome.indexOf('g')) // 3
console.log(nome.replace('Sant Ana', 'Silva')) // Jorge Silva
console.log(nome.toLowerCase()) // jorge sant ana
console.log(nome.toUpperCase()) // JORGE SANT ANA
console.log('-' + nome.trim() + '-') // -Jorge Sant Ana-
