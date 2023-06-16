//um software de marcenaria
//cadeira e sofá

//---------------------------paradigma procedural
/*
//cadeira
let qtde_pernas = 4
let giratoria = false
let cor = 'Azul'

//array de cadeiras
let cadeiras = Array()
cadeiras[0] = Array()
cadeiras[0]['qtde_pernas'] = 4
cadeiras[0]['giratoria'] = false
cadeiras[0]['cor'] = 'azul'

cadeiras[1] = Array()
cadeiras[1]['qtde_pernas'] = 1
cadeiras[1]['giratoria'] = true
cadeiras[1]['cor'] = 'vermelha'

function girarCadeira(indice) {
    if(cadeiras[indice]['giratoria'] === true) {
        console.log('girou')
    } else {
        console.log('cadeira não é giratória')
    }
}

function adicionar_cadeira(qtde_pernas, giratoria, cor) {
    let cadeira = Array()
    cadeira['qtde_pernas'] = qtde_pernas
    cadeira['giratoria'] = giratoria
    cadeira['cor'] = cor

    cadeiras.push(cadeira)
}

adicionar_cadeira(3, false, 'verde')
console.log(cadeiras)

girarCadeira(1)
*/


//-------------------paradigma de Orientação de objetos

class Cadeira {
    constructor(qtde_pernas, giratoria, cor) {
        this.qtde_pernas = qtde_pernas
        this.giratoria = giratoria
        this.cor = cor
    }

    girarCadeira() {
        if(this.giratoria === true) {
            console.log('girou')
        } else {
            console.log('cadeira não é giratória.')
        }
    }
}

let cadeiras = Array()
cadeiras.push(new Cadeira(4, false, 'azul'))
cadeiras.push(new Cadeira(1, true, 'vermelha'))

console.log(cadeiras)


class Sofa {
    constructor(qtde_lugares, reclinavel, cor) {
        this.qtde_lugares = qtde_lugares
        this.reclinavel = reclinavel
        this.cor = cor
    }

    reclinaSofa() {
        if(this.reclinavel === true) {
            console.log('esse sofá é reclinável.')
        } else {
            console.log('Atenção! Esse sofá não é reclinável.')
        }
    }
}

let sofas = Array()
sofas.push(new Sofa(3, false, 'cinza'))
sofas.push(new Sofa(4, true, 'verde'))

console.log(sofas)