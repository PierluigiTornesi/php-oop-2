<?php 
require_once __DIR__ .'/Prodotto.php';

class Cuccia extends Prodotto
{
    protected $materiale;
    protected $luogo_uso;
    protected $dimensione;

    function __construct($_category,$icon_category,$_path_img,$_titolo,$_prezzo,$_materiale,$_luogo_uso,$_dimensione)
    {
        parent::__construct($_category,$icon_category,$_path_img,$_titolo,$_prezzo,$_category,$icon_category);
        
        $this->materiale = $_materiale;
        $this->luogo_uso = $_luogo_uso;
        $this->dimensione = $_dimensione;
    }
    
    public function get_materiale(){
        return $this->materiale;
    }
    public function get_luogo_uso(){
        return $this->luogo_uso;
    }
    public function get_dimensione(){
        return $this->dimensione;
    }

    public function controlloPeso($_controllo_peso)
    {
        if($_controllo_peso > 0){
            echo 'Il peso della cuccia é di ' . $_controllo_peso . ' KG'; 
        }else{
            throw new Exception("Il peso inserito non é valido");
        }
    }

}


?>