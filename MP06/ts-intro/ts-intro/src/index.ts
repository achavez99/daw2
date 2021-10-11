/* import { collapseTextChangeRangesAcrossMultipleVersions } from "typescript";

let nombre: String  = 'Anthony';  
const nombre2 = 'Hola';

let vida: number | string | boolean = 100;
vida = 'FULL';

let habilidades = ['HOLA', 1];
habilidades.push(1);   

"Array bidimensional"
let habilidades1 : (String | number)[][] = [['HOLA',1],['HOLA','ADIOS']]; */

let habilidades : String[]=['Fuego', 'Agua' , 'Tierra'];


/* for (let elemento of habilidades2){
    if(elemento=='Fuego'){
        console.log('He encontrado la palabra fuego');
    }else{
        console.log('No la he encontrado');
    }
} */
habilidades.forEach((elemento,index)=>{
    console.log(elemento);
    console.log(index);
});
let primerString = new String('2');
let segundoString: String ='2';

console.log(primerString == segundoString);
console.log(primerString === segundoString);

/* array bidimensional */
let habilidades2 : String[][]=[['Fuego', 'Agua' , 'Tierra'],['hola' , 'que tal' , 'como va']];

habilidades2.forEach(fila =>{
    fila.forEach(elemento=>{
        console.log(elemento);
    })
})

for (let fila of habilidades2){
    for (let elemento of fila){
        console.log(elemento);
    }
}

interface Persona{
    nombre: string,
    edad: number,
    ciudadNatal: string,
    ciudadResidencia?: string  /* ? = OPCIONAL */
};

let persona: Persona = {
    nombre: 'Foca',
    edad: 99,
    ciudadNatal: 'Lleida'
    /* ciudadResidencia: undefined */
};

persona.ciudadResidencia = 'Fraga';



/* FUNCIONES */

function sumar (primerNumero : number, segundoNumero : number):number{
    return primerNumero + segundoNumero;
}

let resultado = sumar (10, 2);

console.log(resultado);

function multiplicar ( primerNumero:number, segundoNumero=2, otroNumero?:number, otroNumero2?:number){
    return primerNumero * segundoNumero;
}

let resultadoMultiplicacion = multiplicar (10);

console.log(resultadoMultiplicacion);


class Persona1 {
    private nombre: String;
    private edad: number;
    private ciudad: String;

    constructor(nombre: String,edad: number, ciudad:String){
        this.nombre= nombre;
        this.edad=edad;
        this.ciudad=ciudad;
    }

    mostrarNombre(){
        console.log('El nombre de la persona es ', this.nombre)
    }

    getNombre(){
        return this.nombre;
    }
    
    setNombre(nombre: String){
        this.nombre=nombre;

    }

    getEdad(){
        return this.edad;
    }
    
    setEdad(edad: number){
        this.edad=edad;
    }

    getCiudad(){
        return this.ciudad;
    }

    setCiudad(ciudad: String){
        this.ciudad=ciudad;
    }
    
}

let tipoPersona: Persona1 = new Persona1 ('Antonio', 65,'Lisboa');

console.log(tipoPersona);