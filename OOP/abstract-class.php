<?php
//Abstract class
abstract class Bentuk{
    abstract public function hitungLuas();
}

//class turunan pertama
class Persegi extends Bentuk{
    private $sisi;

    public function __construct($sisi){
        $this->sisi = $sisi;
    }
    public function hitungLuas(){
        return $this->sisi * $this->sisi;
    }
}

//class turunan kedua
class Lingkaran extends Bentuk{
    private $jarijari;

    public function __construct($jarijari){
        $this->jarijari = $jarijari;
    }

    public function hitungLuas(){
        return 3.14 * $this->jarijari * $this->jarijari;
    }
}

//class turunan ketiga
class Kerucut extends Bentuk{
    private $r;
    private $s;

    public function __construct($r, $s){
        $this->r = $r;
        $this->s = $s;
    }

    public function hitungLuas(){
        return 3.14 * $this->r * ($this->r + $this->s);
    }

}

//membuat objek dari class persegi
$persegi = new Persegi(5);
echo "Luas persegi:" . $persegi->hitungLuas() . "satuan luas\n";

//membuat objek dari class lingkaran
$lingkaran = new Lingkaran(4);
echo "Luas lingkaran:" . $lingkaran->hitungLuas() . "satuan luas\n";

$kerucut = new Kerucut(10, 5);
echo "Luas kerucut:" . $kerucut->hitungLuas() . "satuan luas\n";
?>