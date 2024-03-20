<?php
/**
 * Parameter casting adalah teknik yang digunakan untuk mengubah tipe 
 * data argumen yang diterima oleh suatu metode agar sesuati dengan yang 
 * diharapkan oleh metode tersebut.
 * ini berguna ketika anda ingin memastikan bahwa argumen yang diberikan sesuai dengan tipe data

 */

 class Calculator{
    public function add(int $a, int $b) : int{
        return $a + $b;
    }
 }

 $calculator = new Calculator();
 echo $calculator->add(5, "3"); //parameter "3" akan di cast menjadi int, hasilnya adalah 8
?>