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
$pempek1 = new pempek("Sediakan Bahan-Bahan Berikut ini :<br> 1. 500 gram Ikan Tenggiri  <br> 2. 2 butir bawang putih
<br> 3. 120 gram Tepung Sagu <br> 4. 60 gram Tepung Terigu <br> 5. 300 ml Air <br> 6. Garam <br>
7. Lada <br> 8. Gula <br> 9. Telur untuk isiannya <br><br>Berikut ini cara membuatnya :<br> 1. Haluskan Ikan
Tenggiri dan bawang putih <br> 2. Tambahkan air masukan ikan yang telah dihaluskan tadi ke dalam mangkuk besar <br> 3. Tambahkan
tepung terigu, tepung sagu, lada, gula, garam dan air <br> 4. Aduk hingga rata <br> 5. Bentuk menyerupai kantong lalu isikan dengan telur
<br> 6. Rebus hingga pempek mengapung sekitar 20 menit <br> 7. Setelah itu angkat dan tiriskan hingga pempek tidak banyak mengandung air");
echo $pempek1->getLabel();