<?php
class Voiture{
    // private $immat;
    // private $circu;
    // private $marque;
    // private $model;
    // public $km;
    // public $color;
    // public $poids;

    public function __construct($immat, $circu, $marque, $model, $km, $color, $poids){
        // $this->photo = $photo;
        $this ->immat = $immat;
        $this ->circu = $circu;
        $this ->km = $km;
        $this ->model = $model;
        $this ->marque = $marque;
        $this ->color = $color;
        $this ->poids = $poids;
            }

    public function marque(){
        if($this->marque === 'Audi'){
            echo 'Reserved';
        }
        else {
            echo 'Free';
        }
    }

    public function type(){
        if($this->poids < 3.5){
            echo 'Commerciale';
        }
        else {
            echo 'Utilitaire';
        }
    }

    public function pays(){
        if(substr($this->immat,0,2) === 'DE'){
            echo 'Allemagne';
        }
        else if(substr($this->immat,0,2) === 'BE'){
            echo 'Belgique';
        }
        else if(substr($this->immat,0,2) === 'FR'){
            echo 'France';
        }
    }

    public function roulage(){
        if($this->km < 100000){
            echo 'Low';
        }
        else if($this->km >= 100000 AND $this->km < 200000){
            echo 'Medium';
        }
        else if($this->km >= 200000){
            echo 'High';
        }
    }

    public function age(){
        $t0 = time();
        $DifSec = $t0 - strtotime($this->circu);
        $DifJour = floor($DifSec/86400);
        echo $DifJour/365;
    }

    public function rouler(){
        $km = $km + 100000;
    }


}
?>