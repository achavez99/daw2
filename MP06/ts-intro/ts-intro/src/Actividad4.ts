class Cafetera{
    private capacidadMaxima: number;
    private cantidadActual:number;

    constructor(capacidadMaxima: number, cantidadActual:number){
        this.capacidadMaxima=1000;
        this.cantidadActual=0;
    }

    getCapacidadMaxima(){
        return this.capacidadMaxima;
    }

    setCapacidadMaxima(capacidadMaxima:number){
        this.capacidadMaxima=capacidadMaxima;
    }

    getCantidadActual(){
        return this.cantidadActual;
    }

    setCantidadActual(cantidadActual:number){
        this.cantidadActual=cantidadActual;
    }

    llenarCafetera():string{
        this.cantidadActual=this.capacidadMaxima;
        return 'Cantidad actual:'+this.cantidadActual;
    }

    servirTaza(capacidad:number){
        if(capacidad>0){
            this.cantidadActual-=capacidad;
            return 'Ha servido:'+capacidad+' de café \nCantidad actual:'+this.cantidadActual;
        }
    }

    vaciarCafetera(){
        this.cantidadActual=0;
        return this.cantidadActual+' de cafe tras vaciar la cafetera';
    }
    
    agregarCafe(agregar:number){
        this.cantidadActual+=agregar;
        return 'Se ha añadido '+agregar+' de cafe \nCantidad actual:'+this.cantidadActual;
    }

}

let cafetera: Cafetera= new Cafetera(0,1000);
console.log(cafetera.llenarCafetera());
console.log(cafetera.servirTaza(20));
console.log(cafetera.vaciarCafetera());
console.log(cafetera.agregarCafe(500));



