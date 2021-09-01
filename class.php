<?php
//class
class mobil{
    
    
    //methods
    function properti_mobil(){
        //object
        echo " kaca , spion , ban , merk";
    }

    function maju(){
        echo " mobil maju ";
    }

    function mundur()
    {
        echo " mobil mundur ";
    }
    
}

$jalan_mundur = new mobil();

echo $jalan_mundur->maju(); 

?>
