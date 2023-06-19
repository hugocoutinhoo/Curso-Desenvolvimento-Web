//destructuring

// -------------------------------Arrays
/*
let frutas = ['Abacaxi', 'Uva', 'Pera', 'Mamão']

//let [a, b, , c] = frutas //pular um índice
let [ a, b, c, d, e = 'Banana'] = frutas //parâmetros default

let coisas = [['Abacaxi', 'Uva', 'Pera', 'Mamão'], ['José', 'Maria']]
let [,[,n2]] = coisas
let [[, ,f3, ],] = coisas
*/
/*
let a = frutas[0]
let b = frutas[1]
let c = frutas[2]
*/
/*
console.log(a, b, c, d, e)
console.log(n2)
console.log(f3)
*/

// ------------------------------- Objetos
let produto = {
    descricao: 'Notebook',
    preco: 1900,
    detalhes: {
        fabricante: 'abc',
        modelo: 'xyz'
    }
}

//let { descricao, preco } = produto

//let { descricao: r, preco: p, desconto } = produto

//let { descricao: r, preco: p = 1000, desconto = 5 } = produto

let {detalhes: {fabricante: f, modelo = 'Não informado'}} = produto
console.log(f, modelo)

// ------------------------------- Funções
//array
/*
let arr = [10, 20, 30, 40]

function teste([a, b, ,d, e = 100]) {
    console.log(a, b, d, e)
}

teste(arr)
*/

//objeto
let obj = {
    a: 10,
    b: 20,
    c: 30,
    d: 40
}

function teste({a: x, d, z = 10}) {
    console.log(x, d, z)
}

teste(obj)

//----------
let obj2 = {
    a: 10,
    b: 20,
    c: 30,
    d: 40
}

let {a, ...z} = obj2
console.log(a)
console.log(z)



