interface Producto{
    nombre: string
    precio: number
    oferta?: boolean
}

let ordenador: Producto={
nombre:'Pantalla',
precio:100
}
let ordenador1: Producto={
    nombre:'Teclado',
    precio:150,
    oferta:true
    }

function precioConIva(producto:Producto){
    if(producto.oferta==true){
        return producto.precio;   
    }
    else{
        return producto.precio * 1.21;
    }
}



console.log(precioConIva(ordenador));
console.log(precioConIva(ordenador1));