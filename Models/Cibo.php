<?php 
require_once __DIR__ .'/Prodotto.php';

class Cibo extends Prodotto
{
    protected $data_scadenza;
    protected $ingrediente;

    function __construct($_category,$icon_category,$_path_img,$_titolo,$_prezzo,$_data_scadenza,$_ingrediente)
    {
        parent::__construct($_category,$icon_category,$_path_img,$_titolo,$_prezzo,$_category,$icon_category);
        
        $this->data_scadenza = $_data_scadenza;
        $this->ingrediente = $_ingrediente;
    }

}


?>