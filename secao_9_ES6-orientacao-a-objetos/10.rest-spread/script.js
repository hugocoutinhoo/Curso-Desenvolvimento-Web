// contexto spread
let tituloArtigo = 'Como utilizar o operador rest/spread'

console.log(tituloArtigo)
console.log(...tituloArtigo)
console.log([...tituloArtigo])

//arrays
let listaCursos1 = ['NodeJs e MongoDB', 'ES6, Typescript e Angular 4']
let listaCursos2 = ['Multiplataforma Android/IOS', 'Introdução ao GNU/Linux']
let listaCursosCompleto = ['Web Completo', 'Android Completo', ...listaCursos1, ...listaCursos2]

console.log(listaCursosCompleto)

//objetos
let pessoa = {
    nome: 'João', 
    idade: 27
}
let clone = {
    endereco: 'Rua ABC',
    ...pessoa
}

console.log(clone)

// -------------------------------------
// contexto rest
function soma(...param) {
    let resultado = 0

    console.log(param)

    param.forEach(v => resultado += v)

    return resultado
}

console.log(soma(3, 8, 5, 7, -8, 10, 115))

function multiplicacao(m, ...p) {
    let resultado = 0
    console.log(m)
    console.log(p)

    p.forEach(v => resultado += m * v)

    return resultado
}

console.log(multiplicacao(5, 7, 12, 3, 49))