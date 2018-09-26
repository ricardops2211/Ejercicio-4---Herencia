<title> LABORATORIO 4 DE PACHAS </title>
<?php
 class Vehiculo{
   private $color ;
   private $peso ;
   
   public function set_color($new_color) {
$this->color = $new_color;
}
public function get_color() {
return $this->color;
}


public function set_peso($new_peso) {
$this->peso = $new_peso;
}
public function get_peso() {
return $this->peso;
}



   public function circula(){
      if($this->peso)
        echo "El vehiculo circula<br>";
      else
        echo "El vehiculo no circula<br>";
      }


      public function añadir_persona($peso_persona){

if($peso_persona>2 && $peso_persona<5) {

echo "El carro es comparible    ";

}else if($peso_persona>12 && $peso_persona<65) {

echo "El carro es  casi comparible     ";

}else if($peso_persona>71 && $peso_persona<80) {

echo "El carro no es comparible     ";

}

       
         
      }
 }

$vehiculo = new Vehiculo();
$vehiculo->circula();
$vehiculo->añadir_persona(4); 
$vehiculo->circula();
 ?>
