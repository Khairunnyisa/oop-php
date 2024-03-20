<?php
class Lingkaran{
    public const PI = 3.14;

    public function luas($jari){
        echo self::PI * $jari * $jari;
    }
}
$lingkaran = new Lingkaran();

$lingkaran->luas(8);
echo PHP_EOL;
echo Lingkaran::PI;
?>