// Funções nativas para manipular strings

/*
var nome = 'Jorge Sant Ana'
console.log(nome.length) // 14
console.log(nome.charAt(4)) // e
console.log(nome.indexOf('g')) // 3
console.log(nome.replace('Sant Ana', 'Silva')) // Jorge Silva
console.log(nome.toLowerCase()) // jorge sant ana
console.log(nome.toUpperCase()) // JORGE SANT ANA
console.log('-' + nome.trim() + '-') // -Jorge Sant Ana-
*/

// Funções nativas para tarefas matemáticas

/*
var x = 10.380
 // 11

console.log(Math.ceil(x)) // 11
console.log(Math.floor(x)) // 10
console.log(Math.random(x)) // número randômico
*/

// Funções nativas para manipular datas
// var data = new Date()

/*
console.log(data.getDate())
console.log(data.getMonth() + 1)
console.log(data.getFullYear())
*/

/*
// adicionar / remover dias
console.log(data.toString())
data.setDate(data.getDate() + 1)
console.log(data.toString())
// adiconar / remover meses
console.log(data.toString())
data.setMonth(data.getMonth() + 1)
console.log(data.toString())
// adiconar / remover anos
console.log(data.toString())
data.setFullYear(data.getFullYear() + 1)
console.log(data.toString())
*/

//15/01/2023
var data1 = new Date(2023, 0, 15);
//23/02/2023
var data2 = new Date(2023, 1, 23);

console.log(data1.toString())
console.log(data2.toString())
// converter datas para algo que possamos calcular
console.log(data1.getTime())
console.log(data2.getTime())
// 1 de janeiro de 1970

// ecnotrar a quantidade de milissegundos entre data1 e data2
var milissegundos_entre_datas = Math.abs(data1.getTime() - data2.getTime())
// 1 dia - 24h, cada hora tem 60min, cada minuto tem 60s e cada segundo tem 1000ms
// quantos milissegundos existem em um dia?
var milissegundos_por_dia = (1*24*60*60*1000)

console.log(Math.ceil(milissegundos_entre_datas / milissegundos_por_dia))