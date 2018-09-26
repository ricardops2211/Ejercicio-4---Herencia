<?php
include 'Cuatro_ruedas.php';
 class Coche extends Cuatro_ruedas{
   private $numero_cadenas_nieve;

 public function set_numero_cadenas_nieve($new_numero_cadenas_nieve) {
$this->numero_cadenas_nieve = $numero_cadenas_nieve;
}
public function get_numero_cadenas_nieve() {
return $this->numero_cadenas_nieve;
}

   public function  añadir_cadenas_nieve($num){
 if($num=1) {

echo "se le añadio una cadena de nieve";

}else if($num=2) {

echo "se le añadio dos cadenas de nieve";

}else if($num=3) {

echo "se le añadio tres cadenas de nieve";

}
   
   }
   public function  quitar_cadenas_nieve($num){
 if($num == '1') {

echo "se le quitó una cadenas de nieve";

}else if($num == '2') {

echo "se le quitó dos cadenas de nieve";

}else if($num == '3') {

echo "se le quitó tres cadenas de nieve";

}
   
   }
 }

$coche = new Coche();
$cuatro_ruedas = new Cuatro_ruedas();
$coche->quitar_cadenas_nieve('2'); 


 ?>
