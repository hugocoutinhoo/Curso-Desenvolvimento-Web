// ------------- Forma mais prática de escrever objetos literais
let nome = 'Jorge'
let idade = 29
let sexo = 'masculino'
let profissao = 'Programador'

let objeto = {
    nome: nome,
    idade: idade,
    sexo: sexo,
    profissao: profissao,
    exibirResumo: function() {
        console.log(`${this.nome}, ${this.idade} anos, do sexo ${this.sexo} é ${this.profissao}`)
    }
}

console.log(objeto)
objeto.exibirResumo()

let objeto2 = {
    nome, //nome = nome variável / valor = valor da variável
    idade,
    sexo,
    profissao,
    exibirResumo() {
        console.log(`${this.nome}, ${this.idade} anos, do sexo ${this.sexo} é ${this.profissao}`)
    }
}

console.log(objeto2)
objeto2.exibirResumo()

///-------------------Modificando valores

let pessoaTeste = {
    nome: 'Hugo',
    idade: 29
}

console.log(pessoaTeste.nome)
pessoaTeste.nome = 'Luiz'

console.log(pessoaTeste.nome)

/// -------------------Criação dinâmica de pares nome/valor

let pessoaTeste2 = {
    nome: 'Maria',
    idade: 25
}

console.log(pessoaTeste2)

//---
pessoaTeste2.sexo = 'Feminino'
console.log(pessoaTeste2)
pessoaTeste2.dizerOi = () => console.log('Olá tudo bem?')
pessoaTeste2.dizerOi()