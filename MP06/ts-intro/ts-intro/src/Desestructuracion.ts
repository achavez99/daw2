interface Reproductor{
    minuto: number,
    segundo: number,
    marca: string,
    detalles: Detalles
    /* 
    {
        autor: string,
        cancion: string
    } 
    */
}

interface Detalles{
    autor: string,
    cancion: string
}

let reproductor: Reproductor = {
    minuto: 50,
    segundo: 22,
    marca: 'Samsung',
    detalles: {
        autor: 'Ozuna',
        cancion: 'Yo Perreo Sola'
    }
}

const { minuto:minutos, marca:marcas,segundo, detalles:{autor,cancion}} = reproductor;
/* 
console.log(minutos);
console.log(segundo);
console.log(marcas);
console.log(autor);
console.log(cancion); */

let futbolista: string[]=['Vinicius Jr', 'Dembele', 'Cr7'];

/* const[paquete, lesionado, thebest] = futbolista; */
const[, ,paquete]=futbolista;

/* console.log(futbolista[0]);
console.log(futbolista[1]);
console.log(futbolista[2]); */

console.log(paquete);
/* console.log(lesionado);
console.log(thebest); */






