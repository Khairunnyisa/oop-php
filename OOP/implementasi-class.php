<?php
    class Mobil {
        
        public function jalan($arah = "depan") {
            echo 'mobil berjalan ke arah' .$arah .PHP_EOL;
        }

        public function lari($arah = "depan") {
            echo 'Naila berlari ke arah' .$arah;
        }
       
    }
 $minicooper = new Mobil();
 echo $minicooper->jalan();
 echo $minicooper->Lari("ke kanan");
?>