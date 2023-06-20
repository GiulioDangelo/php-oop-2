<?php

class Products {
    public string $img;
    public string $nome;
    public int $prezzo;
    public string $animale;
    public string $descrizione;


    public function __construct($nome, $prezzo,$animale, $img, $descrizione)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->animale = $animale;
        $this->img = $img;
        $this->descrizione = $descrizione;
    }

}