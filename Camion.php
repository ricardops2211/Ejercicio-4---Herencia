<?php
include 'Cuatro_ruedas.php';
 class Camion extends Cuatro_ruedas{
   private $longitud;
 public function set_longitud($new_longitud) {
$this->longitud = $longitud;
}
public function get_longitud() {
return $this->longitud;
}
   public function  añadir_remolque($longitud_remolque){
 if($longitud_remolque>2 && $longitud_remolque<5) {

echo "Su longitud se ha ampliado en un rango de 2 a 5m";

}else if($longitud_remolque>12 && $longitud_remolque<65) {

echo "Su longitud se ha ampliado en un rango de 12 a 65m";

}else if($longitud_remolque>71 && $longitud_remolque<80) {

echo "Su longitud se ha ampliado en un rango de 71 a 80m ";

}
   }
   }

 $camion = new Camion();
$cuatro_ruedas = new Cuatro_ruedas();
$camion->añadir_remolque(45); 



 ?>
