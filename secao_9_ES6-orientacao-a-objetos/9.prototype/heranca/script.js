
Object.prototype.atributo50 = 'z' //método global

let animal = {
    atributo1: 'a'
}
let vertebrado = {
    __proto__: animal,
    atributo2: 'b'
}
let ave = {
    __proto__: vertebrado,
    atributo3: 'c',
    atributo2: 'x'
}

console.log(ave.atributo3, ave.atributo2, ave.atributo1, ave.atributo50)