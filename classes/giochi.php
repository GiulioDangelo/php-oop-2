<?php 
class Medicine extends Products{
    public $tipo;
    public $colore;

    public function __construct($tipo, $colore)
    {
        $this->tipo = $tipo;
        $this->colore = $colore;
    }
}