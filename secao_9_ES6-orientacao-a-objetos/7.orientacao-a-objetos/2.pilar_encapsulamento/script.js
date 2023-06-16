class Tv {
    constructor() {
        this._relacaoCanais = Array(2, 4, 6, 9, 11, 13)
        this._canalAtivo = 9
        this.volume = 5
    }

    //getters e setters
    get canalAtivo() {
        return this._canalAtivo
    }

    set canalAtivo(canal) {
        //
        if(this._relacaoCanais.indexOf(canal) !== -1) {
            this._canalAtivo = canal
        }
    }
}

let tv = new Tv()

tv.canalAtivo = 2
console.log(tv.canalAtivo)