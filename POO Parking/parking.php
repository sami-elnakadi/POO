<?php
class Voiture{
    private $_immat;
    private $_circu;
    private $_marque;
    private $_model;
    public $_km;
    public $_color;
    public $_poids;

    public function model($car){
        if($car === 'Audi'){
            $this->_model = 'reserved';
        }
        else {
            $this->_model = 'free';
        }
        echo $this->_model;
    }

    public function type($poids){
        if($poids < 3.5){
            $this->_poids = 'commerciale';
        }
        else {
            $this->_poids = 'utilitaire';
        }
        echo $this->_poids;
    }

    public function pays($immat){
        if(substr($immat,2) === 'DE'){
            $this->_immat = 'Allemagne';
        }
        else if(substr($immat,2) === 'BE'){
            $this->_immat = 'Belgique';
        }
        else if(substr($immat,2) === 'FR'){
            $this->_immat = 'France';
        }
        echo $this->_immat;
    }

    public function roulage($km){
        if($km < 100000){
            $this->_km = 'low';
        }
        else if($km >= 100000 AND $km < 200000){
            $this->_km = 'medium';
        }
        else if($km >= 200000){
            $this->_km = 'high';
        }
        echo $this->_km;
    }

    public function age($date){
        $t0 = time();
        $DifSec = $t0 - strtotime($date);
        $DifJour = floor($DifSec/86400);
        $this->_circu = $DifJour;
        echo $this->circu;
    }

    public function rouler(){
        $km = $km + 100000;
    }


}
?>