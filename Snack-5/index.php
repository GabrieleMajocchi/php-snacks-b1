<?php

class Indumento {
    public $materiale;
    
    public function __construct($materiale) {
        $this->materiale = $materiale;
    }
}

class Scarpa extends Indumento {
    public $taglia;
    
    public function __construct($materiale, $taglia) {
        parent::__construct($materiale);
        $this->taglia = $taglia;
    }
}

class Cappello extends Indumento {
    public $colore;
    
    public function __construct($materiale, $colore) {
        parent::__construct($materiale);
        $this->colore = $colore;
    }
}

$indumento = new Indumento('cotone');
$scarpa = new Scarpa('tela', 45);
$cappello = new Cappello('velluto', 'rosso');

var_dump($indumento);

var_dump($scarpa);

var_dump($cappello);
?>