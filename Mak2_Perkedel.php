<?php

    class perkedel{
        private $Bahan_dan_Langkah;

        public function __construct ( $Bahan_dan_Langkah = "bahan" ){
            $this->Bahan_dan_Langkah      = $Bahan_dan_Langkah; 
        }
        public function getLabel(){
            $bahan = $this->Bahan_dan_Langkah;
            return $bahan;
        }
}
$perkedel1 = new perkedel("Sediakan Bahan-bahan berikut ini :<br> 1. Kentang sebanyak 500 gram<br> 2. Telur 1 butir saja<br>
3. Garam dan lada secukupnya<br> 4. Bawang putih sebanyak 2 siung <br> 5. Daun bawang secukupnya <br><br>
Berikut ini cara membuatnya :<br> 1. Pertama goreng kentang goreng yang sudah dipotong dadu, Kemudian haluskan perkedel
bisa menggunakan ulekan <br> 2. Dalam mangkuk besar campur dan aduk rata semua bahan, kecuali telur untuk balutan luar 
<br> 3. Bagi adonan menjadi 10 bagian, lalu bentuk menjadi 10 bulatan pipih. Gulingkan dalam kocokan telur <br> 4. Kemudian
goreng dalam minyak panas dengan api sedang hingga berwarna keemasan. Jika sudah matang, angkat, dan tiriskan");
echo $perkedel1->getLabel();