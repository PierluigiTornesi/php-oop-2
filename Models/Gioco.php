<?php 
require_once __DIR__ .'/Prodotto.php';

class Gioco extends Prodotto
{
    protected $etá_min;
    protected $utilizzo;

    function __construct($_category,$icon_category,$_path_img,$_titolo,$_prezzo,$_etá_min,$_utilizzo)
    {
        parent::__construct($_category,$icon_category,$_path_img,$_titolo,$_prezzo,$_category,$icon_category);
        
        $this->etá_min = $_etá_min;
        $this->utilizzo = $_utilizzo;
    }

}


?>