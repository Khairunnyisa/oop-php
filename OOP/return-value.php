<?php
class Lingkaran{
    const PI = 3.14;
    public function luas ($jari){
        return self::PI * $jari * $jari;
    }
}

$luas_lingkaran = new Lingkaran();
echo $luas_lingkaran->luas(0);
?>