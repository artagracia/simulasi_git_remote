<?php

    class Doger{
        private $Bahan_dan_Langkah;

        public function __construct ( $Bahan_dan_Langkah = "bahan" ){
            $this->Bahan_dan_Langkah      = $Bahan_dan_Langkah; 
        }
        public function getLabel(){
            $bahan = $this->Bahan_dan_Langkah;
            return $bahan;
        }
}
$Doger1 = new Doger("Sediakan Bahan-bahan berikut ini :<br>1. 200 ml Santan cair <br> 2. 150 gram gula pasir <br> 
3. 1 sdm pewarna makanan merah <br><br> Sediakan juga bahan isiannya seperti :<br> 1. 75 gram tape ketan hitam/hijau<br> 
2. 50 gram tape singkong<br> 3. 50 gram daging kelapa<br> 4. Susu kental manis secukupnya. <br><br>Berikut ini cara membuatnya :<br> 
1. Masukkan santan dan gula pasir ke dalam panci, panaskan hingga agak mendidih <br> 2. Masukkan pewarna makanan sambil terus di aduk
hingga berbuih<br> 3. Pindahkan ke dalam wadah lalu dimasukkan ke dalam lemari es hingga es membeku kurang lebih 6-8 jam<br> 
4. Keluarkan es lalu tunggu sekitar 10-15 menit hingga es bisa di keruk<br> 5. Susun bahan isian dalam gelas saji, tambahkan es
yang telah di keruk<br> 6. Beri susu kental manis dan taburan kacang bila mau sesuai selera");
echo $Doger1->getLabel();