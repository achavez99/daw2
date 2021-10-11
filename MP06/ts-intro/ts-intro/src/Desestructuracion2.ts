interface Producto1{
    descripcion: string,
    precio: number
};

let television: Producto1 = {
    descripcion:'Television 55 pulgadas',
    precio: 800
};
let tablet: Producto1 = {
    descripcion:'Ipad Pro',
    precio:1600
};
function calculaIva(productos: Producto[]){
    let total=0;
    
    productos.forEach(({precio})=>{
        total+=precio;
    });

    return [total, total * 0.21];

}

let productos = [television, tablet];

const [total, iva]= calculaIva(productos);

console.log(total);
console.log(iva);
