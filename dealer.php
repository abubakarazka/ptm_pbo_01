<?php

class mobil_lama {
    public function nama_kendaraan(){
        return "mobil : lexus, 100kmh, 2000";
    }
}


class mobil_baru extends mobil_lama{
    public function nama_kendaraan()
    {
        return "mobil : New Lexsus , 200Kmh, 2020";
    }

    public function keduanya(){
        return parent::nama_kendaraan();
    }

}

$dealer = new mobil_baru();
echo $dealer->nama_kendaraan();
echo "<br>";
echo $dealer->keduanya();
?>