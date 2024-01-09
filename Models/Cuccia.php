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

}


?>