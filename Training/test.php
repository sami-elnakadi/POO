<?php
// Creer la classe perso
class Personnage{
    private $_force = 20;
    private $_exp = 90;
    public $_degat = 0;
    
//Creer une méthode (fct) ayant pour but d'afficher un texte

    public function addExp(){
        $this->_exp = $this->_exp + 10;
    }

    public function lireExp(){
        echo $this->_exp;
    }

    
}
$perso = new Personnage;

$perso->addExp();
$perso->lireExp();

?>