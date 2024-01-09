<?php 

class Categoria
{
    public $category; 
    public $icon_category;

    function __construct($_category,$icon_category)
    {
        $this->category = $_category;
        $this->icon_category = $icon_category;
    }

}

?>