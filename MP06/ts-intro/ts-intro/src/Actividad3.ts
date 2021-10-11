class Cuenta{
    private titular: string;
    private cantidad: number;

    constructor(titular: string, cantidad: number){
        this.titular=titular;
        this.cantidad=cantidad;
    }

    getTitular(){
        return this.titular;
    }
    setTitular(titular:string){
        this.titular=titular;
    }
    getCantidad(){
        return this.cantidad;
    }
    setCantidad(cantidad:number){
        this.cantidad=cantidad;
    }

    mostrar():string{
        return this.titular+' tiene una cantidad de:'+this.cantidad+' €';
    }
    
    ingresar(cantidad:number){

        if(this.cantidad>=0){
            this.cantidad+=cantidad;
            return this.titular+' ha ingresado '+cantidad+' en la cuenta';
        }else{
            return 'El saldo ingresado no puede ser negativo';
        }
    }

    retirar(cantidad:number){
        if (this.cantidad - cantidad < 0) {
            this.cantidad = 0;
            } else {
                this.cantidad -= cantidad;
                return 'Se ha retirado '+ cantidad + ' de la cuenta';
    }
}

} 

let cuenta1:Cuenta= new Cuenta('La pelucas',659);
console.log(cuenta1.ingresar(50));
console.log(cuenta1.retirar(10));
console.log(cuenta1.mostrar());



