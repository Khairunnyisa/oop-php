<?php
class kendaraan{
    public $merek;

    protected $warna;

    private $tahun;

    public function __construct($merek, $warna, $tahun) {
        $this->merek = $merek;
        $this->warna = $warna;
        $this->tahun = $tahun;
    }
    public function infoPublik(){
        echo "merek: " . $this->merek . PHP_EOL;
        echo "warna: " . $this->warna . PHP_EOL;
        echo "tahun: " . $this->tahun . PHP_EOL;
    }
}
$mobil = new kendaraan("Toyota", "Merah", 2023);

echo "merek = " . $mobil->merek . PHP_EOL;

//si warna bakal gabisa karena dia protected, dan itu cuman bisa dipanggil yg dikelasnya aja
// echo "warna = " . $warna->warna . PHP_EOL;
// //ini juga gabisa krn dia private
// echo "tahun = " . $tahun->tahun . PHP_EOL;

$mobil->infoPublik();
?>