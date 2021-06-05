<?php
/**
 * TRAIT
*/
trait UbicazioneOggetto {
    public $lat;
    public $lon;

    public function getPosition() {
        // get coord and return position
        return 'print here the position';
    }
}

/**
 * CLASSE PADRE
*/
class Libro {
    // Proprietà
    public $titolo;
    public $autore;
    public $prezzo;

    // Costruttore
    function __construct($titolo, $autore, $prezzo) {
        $this->titolo = $titolo;
        $this->autore = $autore;
        $this->prezzo = $prezzo;
    }

    // Metodi
    public function calcSconto($perc) {
        $sconto = $this->prezzo - ($this->prezzo * $perc / 100);
        return number_format($sconto, 2);
    }
}

/**
 * CLASSE FIGLIA
*/
class Manuale extends Libro {
    // trait
    use UbicazioneOggetto;

    // proprietà
    public $argomento;

    //Costruttore
    function __construct($titolo, $autore, $prezzo, $argomento) {
        // settiamo le proprietà del padre
        parent::__construct($titolo, $autore, $prezzo);
        // aggiungiamo la proprietà del figlio
        $this->argomento = $argomento; 
    }

    // Metodi
    // A: sovrascrittura parziale
    public function calcSconto($perc) {
        $sconto = parent::calcSconto($perc);
        return $sconto - 1.25;
    }

    // B: sovrascrittura totale
    /*public function calcSconto($perc) {
        return '0. No discount for manuals';
    }*/

    // Metodo esclusivo di Manuale
    public function getType() {
        return $this->argomento;
    }
}


/**
 * INSTANZE OGGETTI
*/ 

// Da classe padre
$book = new Libro('Lorem ipsum book', 'paolo Duzioni', 20);
var_dump($book);

echo 'Prezzo con sconto 10% : € ' . $book->calcSconto(10) . '<br>';

// Da classe figlia
$scacchi = new Manuale('Aperture di scacchi', 'Paolo Duzioni', 30, 'Scacchi');
var_dump($scacchi);

echo 'Prezzo con sconto 10% : € ' . $scacchi->calcSconto(10) . '<br>';
echo 'Tipologia del manuale: ' . $scacchi->getType() . '<br>';
// inclusione senza concatenazioni
echo "Tipologia del manuale: {$scacchi->getType()}<br>";

//trait
echo 'Posizione del manuale: ' . $scacchi->getPosition();