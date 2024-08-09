<?php
namespace ali\Backend;
class curds {
   public $name;
public function __construct ($name){
    $this->name = $name;
}
 public function printName() {
    echo "ali";
 }   

}


$x = new curds("ali") ;
$x->printName();

?>