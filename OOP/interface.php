<?php
interface Buah {
    public function makan();
    public function setWarna($warna);
}

interface Benda{
    public function setUkuran($ukuran);
}
class Apel implements Buah, Benda{
    protected $warna;
    protected $ukuran;

    public function makan()
    {
        return "saya sedang makan apel " . $this->warna . "yang ukurannya " . $this->ukuran;
    }

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    public function setUkuran($ukuran)
    {
        $this->ukuran= $ukuran;
    }
}
$apel = new Apel();
$apel->setWarna('Merah');
$apel->setUkuran('Besar');
echo $apel->makan();
?>