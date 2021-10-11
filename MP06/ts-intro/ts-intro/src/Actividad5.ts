class Productos{
    private nombreProducto: string;
    private numeroLote: number;

    constructor(nombreProducto: string, numeroLote: number){
        this.nombreProducto = nombreProducto;
        this.numeroLote= numeroLote;
    }

    getNombreProducto(){
        return this.nombreProducto;
    }
    setNombreProducto(nombreProducto:string){
        this.nombreProducto=nombreProducto;
    }

    getNumeroLote(){
        return this.numeroLote;
    }
    setNumeroLote(numeroLote:number){
        this.numeroLote=numeroLote;
    }

    mostrar(){
        return 'Nombre producto: '+this.nombreProducto+' \nNumero lote: '+this.numeroLote;
    }

    
}
class ProductosFrescos extends Productos{ 
    private fechaEnvasado: string;
    private paisOrigen: string;
    
        constructor(nombreProducto: string, numeroLote: number,fechaEnvasado: string, paisOrigen: string){
            super(nombreProducto,numeroLote);
            this.fechaEnvasado=fechaEnvasado;
            this.paisOrigen=paisOrigen;
        }

        getFechaEnvasado(){
            return this.fechaEnvasado;
        }
        setFechaEnvasado(fechaEnvasado:string){
            this.fechaEnvasado=this.fechaEnvasado;
        }

        getPaisOrigen(){
            return this.paisOrigen;
        }
        setPaisOrigen(paisOrigen:string){
            this.paisOrigen=paisOrigen;
        }

        mostrar(): string{
            return super.mostrar()+'\nFecha envasado: '+this.fechaEnvasado+' \nPais origen: '+this.paisOrigen;
        }


    }

class ProductosRefrigerados extends Productos{
    private codigoOrganismo: number;

    constructor(nombreProducto: string, numeroLote: number, codigoOrganismo: number){
        super(nombreProducto,numeroLote);
        this.codigoOrganismo=codigoOrganismo;
    }

    getCodigoOrganismo(){
        return this.codigoOrganismo;
    }
    setCodigoOrganismo(codigoOrganismo:number){
        this.codigoOrganismo=codigoOrganismo;
    }

    mostrar(): string{
        return super.mostrar()+'\nCódigo del organismo de supervisión alimentaria: '+this.codigoOrganismo;
    }
    
}

class ProductosCongelados extends Productos{
    private tempCongelacion: number;

    constructor(nombreProducto: string, numeroLote: number, tempCongelacion: number){
        super(nombreProducto,numeroLote);
        this.tempCongelacion=tempCongelacion;
    }

    getTempCongelacion(){
        return this.tempCongelacion;
    }
    setTempCongelacion(tempCongelacion:number){
        this.tempCongelacion=tempCongelacion;
    }

    mostrar(): string{
        return super.mostrar()+ '\nTiempo congelacion: '+this.tempCongelacion;
    }
}

let productosFrescos: ProductosFrescos= new ProductosFrescos('Arandanos',23142,'04/10/2021','Colombia');
let productosRefrigerados: ProductosRefrigerados= new ProductosRefrigerados('Fanta naranja',4142,2131);
let productosCongelados: ProductosCongelados= new ProductosCongelados('Melon',3532,-5);

console.log(productosFrescos.mostrar());
console.log(productosRefrigerados.mostrar());
console.log(productosCongelados.mostrar());


