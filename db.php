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