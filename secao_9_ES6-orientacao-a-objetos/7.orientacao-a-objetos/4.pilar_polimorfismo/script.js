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
    constructor(sabeFalar, cor, tamanho, peso) {  //variável contexto função
        super('médio', cor, tamanho, peso)
        this.sabeFalar = sabeFalar  //variável contexto classe
    }

    falar() {
        console.log('falar')
    }
}

class Avestruz extends Passaro {
    constructor() {
        super('grande', 'branco e preto', 250, 15000)

    }

    enterrarCabeca() {
        console.log('enterrar a cabeça')
    }

    voar() {                           //polimorfismo
        console.log('Não sabe voar')
    }
}

let papagaio = new Papagaio(true, 'verde', 25, 350)
console.log(papagaio)
papagaio.voar()

let avestruz = new Avestruz()
avestruz.enterrarCabeca()
avestruz.voar()


