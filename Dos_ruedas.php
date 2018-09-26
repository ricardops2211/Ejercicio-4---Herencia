<?php
include 'vehiculo.php';
 class Dos_ruedas extends Vehiculo{
   private $cilindrada;

   public function set_cilindrada($new_cilindrada) {
$this->cilindrada = $new_cilindrada;
}
public function get_cilindrada() {
return $this->cilindrada;
}

   public function  poner_gasolina($litros){
    if($litros>2 && $litros<5) {

echo "El combustible esta dentro del rango   ";

}else if($litros>12 && $litros<65) {

echo "El carro es  casi del rango     ";

}else if($litros>71 && $litros<80) {

echo "El carro no esta en el rango     ";

}
   }
 }
$vehiculo = new Vehiculo();
$dos_ruedas = new Dos_ruedas();
$vehiculo->circula();
$dos_ruedas->poner_gasolina(34); 
$vehiculo->circula();



 ?>
