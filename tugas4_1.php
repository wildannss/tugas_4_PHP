<?php

    $beli=8000;
    $jual=7500;
    $untung=300;
    $ekor=($beli+$untung)/$jual;

    echo "Harga Beli = Rp ".$beli;
    print ("<br />");
    echo "Harga Jual = Rp ".$jual;
    print ("<br />");    
    echo "Keuntungan = Rp ".$untung;
    print ("<br />");
    echo "Berapa Jumlah kambing yang dibeli?Jawaban : ".$ekor." ekor";

?>