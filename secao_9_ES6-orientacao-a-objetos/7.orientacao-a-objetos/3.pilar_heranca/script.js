class Animal {
    constructor(cor, tamanho, peso) {
        this.cor = cor
        this.tamanho = tamanho
        this.peso = peso      
    }

    dormir() {
        console.log('dormir')
    }
}

/*
class Cachorro extends Animal {
    constructor() {
        super()
        this.orelhas = 'grandes e caídas'
    }

    correr() {
        console.log('correr')
    }
    rosnar() {
        console.log('rosnar')
    }
}
*/

class Passaro extends Animal {
    constructor(bico, cor, tamanho, peso) {
        super(cor, tamanho, peso)
        this.bico = bico
    }

    voar() {
        console.log('voar')
    }
}

class Papagaio extends Passaro{
    constructor(sabeFalar, cor, tamanho, peso) {        //variável contexto função
        super('médio', cor, tamanho, peso)
        this.sabeFalar = sabeFalar  //variável contexto classe
    }

    falar() {
        console.log('falar')
    }
}

let papagaio = new Papagaio(true, 'verde', 25, 350)
console.log(papagaio)

let papagaio2 = new Papagaio(false, 'branco', 10, 80)
console.log(papagaio2)

/*
let cachorro = new Cachorro()
let passaro = new Passaro()
let papagaio = new Papagaio()

cachorro.dormir()
passaro.dormir()
papagaio.dormir()
papagaio.falar()
papagaio.voar()
*/

