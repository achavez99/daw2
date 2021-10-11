import { collapseTextChangeRangesAcrossMultipleVersions } from "typescript";

class Animal{
    nombre: string;
    edad: number;
    color: string;

    constructor(nombre: string, edad:number, color: string){
        this.nombre=nombre;
        this.edad=edad;
        this.color=color;
    }

    mostrar(){
        return 'El nombre del animal es '+this.nombre,' su edad es '+this.edad,' y su color es '+this.color;
    }
}


/* HERENCIA */
class Gato extends Animal{
    raza: string;

    constructor(nombre: string, edad:number, color: string, raza: string){
        super(nombre,edad,color);
        this.raza=raza;
    }

    mostrar(): string{
        return super.mostrar() +' y su raza es '+ this.raza;
    }
}

class Lombriz extends Animal{
    longitud: number;
    
    constructor(nombre: string, edad:number, color: string,longitud: number){
        super(nombre,edad,color);
        this.longitud= longitud;
    }

    mostrar(): string{
        return super.mostrar()+' y su longitud es '+this.longitud;
    }
}

let gato: Gato = new Gato('Tom',8,'gris','Siames');
let lombriz: Lombriz = new Lombriz('Joel',18,'caca',3);

console.log(gato.mostrar());
console.log(lombriz.mostrar());