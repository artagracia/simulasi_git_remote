<?php

    class pempek{
        private $Bahan_dan_Langkah;

        public function __construct ( $Bahan_dan_Langkah = "bahan" ){
            $this->Bahan_dan_Langkah      = $Bahan_dan_Langkah; 
        }
        public function getLabel(){
            $bahan = $this->Bahan_dan_Langkah;
            return $bahan;
        }
}
$pempek1 = new pempek("Sediakan Bahan-Bahan Berikut ini :<br> 1. 1 bag Teh celup<br> 2. 2 sdt Gula<br> 3. 50 ml air panas<br>
4. 100 ml air dingin<br> 5. Es Batu  <br><br>Berikut ini cara membuatnya :<br> 1. Siapkan teh celup kedalam mug favorite kamu<br>
2. Tambahkan gula pasir<br> 3. Tuangi air panas, lalu aduk sampai gula larut<br> 4. Tambahkan air dingin kedalam campuran teh tadi<br>
6. Aduk rata, tambahkan es batu sesuai selera kamu.");
echo $pempek1->getLabel();