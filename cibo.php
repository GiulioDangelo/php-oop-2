<?php 

class Cibo extends Products{
    public $peso;
    public $calorie;
    public $gusto;

    public function __construct($nome, $prezzo,$animale, $img, $descrizione,$peso, $calorie, $gusto)
    {
        parent::__construct($nome, $prezzo,$animale, $img, $descrizione);
        $this->peso = $peso;
        $this->calorie = $calorie;
        $this->gusto = $gusto;
    }


}