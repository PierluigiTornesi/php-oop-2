<?php 
require_once __DIR__ .'/Prodotto.php';

class Gioco extends Prodotto
{
    protected $eta_min;
    protected $utilizzo;

    function __construct($_category,$icon_category,$_path_img,$_titolo,$_prezzo,$_eta_min,$_utilizzo)
    {
        parent::__construct($_category,$icon_category,$_path_img,$_titolo,$_prezzo,$_category,$icon_category);
        
        $this->eta_min = $_eta_min;
        $this->utilizzo = $_utilizzo;
    }

    public function get_eta_min(){
        return $this->eta_min;
    }

    public function get_utilizzo(){
        return $this->utilizzo;
    }

}


?>