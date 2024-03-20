<?php

/**
 * Trait adalah fitur dalam pemrograman berorientasi objek (OOP) PHP
 * yang memungkinkan anda untuk menambhkan metode dan properti
 * ke dalam kelas tanpa perlu mewarisi kelas tersebut.
 * ini memberikan fleksibilitas yang lebih besar dalam mengorganisasi code dan memungkinkan komposisi
 * ulang yang mudah untuk fungsionlitas yang sama di beberapa kelas
 */
 
 trait Log {
    public function logMessage($message) {
        echo "Log : " . $message . "\n";
    }
 }

 class User {
    use Log;

    public function lakukanSesuatu(){
        $this->logMessage("haloo ini user");
    }
 }
 $user = new User();
 $user->lakukanSesuatu();

?>