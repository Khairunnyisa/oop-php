<?php
/**
 * constructor adalah seperti "pembuat objek.
 * ketika anda membuat objek dari seuatu kelas, constructor adalah metode khusus yang digunakan
 * untuk mengatur properti atau nilai awal objek tersebut.
 * ini adalah langkah pertama saat objek "dibuat"
 * dan biasanya memiliki nama __construct dalam PHP.
 * contoh constructor:
 * jika anda memiliki kelas mobil, constructor digunakan 
 * untuk mengatur warna dan merk mobil saat anda membuat mobil baru
 */
class Mobil
{
	public $merk;
	public $warna;
	public function __construct($merk,$warna)
	{
		$this->merk = $merk;
		$this->warna = $warna;
	}
    public function cetak(){
        echo "Merek " .$this->merk;
    }
}
 
$mobilBaru = new Mobil
?>
?>