import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title: string = 'Contador app';
  numero: number = 0;

  /* sumar(){
    this.numero+=1;
  }
  restar(){
    if(this.numero>0){
    this.numero-=1;
    }else{

    }
    
  } */
  base:number=5;
  calcular(numero:number){
    
    this.numero+=numero;
 
  }
}
