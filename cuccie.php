<?php 
 
 class Cuccia extends Products{
    public string $dimensione;
    public string $materiali;

    public function __construct($nome, $prezzo,$animale, $img, $descrizione,$dimensione, $materiali)
    {
        parent::__construct($nome, $prezzo,$animale, $img, $descrizione);
        $this->dimensione = $dimensione;
        $this->materiali = $materiali;
    }
}