//requisição http
//resposta http

let Bicicleta1 = {
    cor: 'Branca',
    marcha: 'única',
    aro: 12,
    pedalar() {console.log('Método pedalar executado')}
}

let Bicicleta2 = {
    cor: 'Vermelha',
    marcha: '18',
    aro: 26,
    pedalar() {console.log('Método pedalar executado')}
}

console.log(Bicicleta1)
console.log(Bicicleta2)

//---var que recebe um função -- função fatory retorna um objeto
let BicicletaFactory = function(cor, marcha, aro) {
    //lógica
    //requisição http
    //resposta http
    return {
        cor,
        marcha,
        aro,
        pedalar() {console.log('Método pedalar executado')}
    }
}

let Bicicleta3 = BicicletaFactory('Vermelha', '18', 26)
console.log(Bicicleta3)
let Bicicleta4 = BicicletaFactory('Azul', '19', 29)
console.log(Bicicleta4)

console.log(Bicicleta4.cor)
