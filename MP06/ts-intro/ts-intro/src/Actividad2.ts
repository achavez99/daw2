class Persona2 {
    private nombre: string;
    private edad: number;
    private DNI: string;

    constructor(nombre: string, edad: number, DNI: string){
        this.nombre=nombre;
        this.edad=edad;
        this.DNI=DNI;
    }

    getNombre(){
        return this.nombre;
    }

    setNombre(nombre: string){
        this.nombre=nombre;
    }

    getEdad(){
        return this.edad;
    }

    setEdad(edad:number){
        this.edad=edad;
    }

    getDNI(){
        return this.DNI;
    }

    setDNI(DNI:string){
        this.DNI=DNI;
    }

    mostrarDatos(){
        console.log(this.nombre,' tiene ',this.edad,' con el DNI:',this.DNI);
    }

    
 
    esMayorDeEdad(){
            if(this.edad >= 18){
                console.log('Es mayor de edad') 
            }else{
                console.log('Es menor de edad') 
            }
        }

        
   
}

let persona1 =new Persona2('Sapo',20,'49231809D');

console.log(persona1.mostrarDatos());
console.log(persona1.esMayorDeEdad());