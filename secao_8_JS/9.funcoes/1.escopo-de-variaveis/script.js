// 3 escopos: global, função e o bloco

var serie = 'Friends'

//escopo de bloco
if (true) {
    var serie2 = 'GOT'
    console.log(serie)
}

console.log(serie2)

function x() {
    var serie3 = 'TWD'
    console.log(serie)
    console.log(serie2)
}

x()
//console.log(serie3)