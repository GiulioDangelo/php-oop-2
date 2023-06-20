<?php 
class Medicine extends Products{
    public $dimensione;
    public $materiali;

    public function __construct($dimensione, $materiali)
    {
        $this->dimensione = $dimensione;
        $this->materiali = $materiali;
    }
}