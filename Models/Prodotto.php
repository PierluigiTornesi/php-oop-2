<?php 
require_once __DIR__ .'/Categoria.php';

class Prodotto extends Categoria
{
    protected $path_img;
    protected $titolo;
    protected $prezzo;

    function __construct($_category,$icon_category,$_path_img,$_titolo,$_prezzo)
    {
        parent::__construct($_category,$icon_category);
        $this->path_img = $_path_img;
        $this->titolo = $_titolo;
        $this->prezzo = $_prezzo;
    }

    public function get_titolo(){
        return $this->titolo;
    }
    public function get_prezzo(){
        return $this->prezzo;
    }
    public function get_path_img(){
        return $this->path_img;
    }

}


?>