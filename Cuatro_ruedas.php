<?php
include 'vehiculo.php';
 class Cuatro_ruedas extends Vehiculo{
   private $numeropuertas;
   private $peso;

 public function set_numeropuertas($new_numeropuertas) {
$this->numeropuertas = $new_numeropuertas;
}
public function get_numeropuertas() {
return $this->numeropuertas;
}

 public function set_peso($new_peso) {
$this->peso = $new_peso;
}
public function get_peso() {
return $this->peso;
}
   public function repintar($color){
    if($color == 'rojo') {

echo "Hay que repintarlo de rojo";

}else if($color == 'verde') {

echo "Hay que repintarlo de verde";

}else if($color == 'azul') {

echo "Hay que repintarlo de azul";

}
   }
 }
$vehiculo = new Vehiculo();
$cuatro_ruedas = new Cuatro_ruedas();
$vehiculo->circula();
$cuatro_ruedas->repintar('verde');
$vehiculo->circula();


 ?>
