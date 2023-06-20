<?php
include __DIR__ . './giochi.php';
include __DIR__ . './cuccie.php';
include __DIR__ . './cibo.php';

class Products {
    public $nome;
    public $prezzo;
    public $img;
    public $descrizione;


    public function __construct($nome, $prezzo, $img, $descrizione)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->img = $img;
        $this->descrizione = $descrizione;
    }


}
