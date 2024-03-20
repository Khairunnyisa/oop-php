<?php
class objek {
    public $name;

    public function __construct($name){
        $this->name = $name;
        echo "objek {$name} telah dibuat". PHP_EOL;
    }
    public function getInfo(){
        echo " ini adalah objek dengan nama ($this->name)". PHP_EOL;
    }
    public function __destruct(){
        echo "objek ($this->name) telah dihancurkan". PHP_EOL;
    }
}
$objek = new objec("Naila");
$objek->getInfo();
?>