<?php
class Giochi extends Products {
    public string $tipo;
    public string $marca;

    public function __construct($nome, $prezzo,$animale, $img, $descrizione, $tipo, $marca)
    {
        parent::__construct($nome, $prezzo,$animale, $img, $descrizione);
        $this->tipo = $tipo;
        $this->marca = $marca;
    }
}
