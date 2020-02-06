<?php

class Azienda {
    public $ragioneSociale;
    public $pIva;
    public $destinazione;

    public function __construct($_ragioneSociale, $_pIva, $_destinazione)
    {
        $this->pIva = $_pIva;
        $this->ragioneSociale = $_ragioneSociale;
        $this->destinazione = $_destinazione;
    }
}

$azienda1 = new Azienda ('Togood', 'pdosi9384', 'servizi');

echo '<pre>';
var_dump($azienda1);
echo '</pre>';
