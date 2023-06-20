<?php 
class Medicine extends Products{
    public $peso;
    public $calorie;
    public $gusto;

    public function __construct($peso, $calorie, $gusto)
    {
        $this->peso = $peso;
        $this->calorie = $calorie;
        $this->gusto = $gusto;
    }

    
}