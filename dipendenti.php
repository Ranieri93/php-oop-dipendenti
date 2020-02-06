<?php
require_once 'index.php';
// vado ad estendere la classe azienda in dipendente
class Dipendente extends Azienda {
    public $id_dipendente;
    public $dipartimento;
    public $ufficio;
    public $oreGiornaliere;
// creo un costruttore con il riferimento al padre
    public function __construct
    ($_ragioneSociale, $_pIva,
     $_destinazione,$_id_dipendente,
     $_dipartimento, $_ufficio, $_oreGiornaliere)
    {
        parent::__construct($_ragioneSociale, $_pIva, $_destinazione);
        $this->id_dipendente = $_id_dipendente;
        $this->dipartimento = $_dipartimento;
        $this->ufficio = $_ufficio;
        $this->oreGiornaliere = $_oreGiornaliere;
    }
// aggiungo una funzione di calcolo del salario con i relativi controlli
    public function calcolaSalario ($retribuzioneOraria) {
        if (empty($this->oreGiornaliere)) {
            throw new Exception('Non hai inserito le ore giornaliere!');
        } elseif ($this->oreGiornaliere < 0) {
            throw new Exception('Le ore giornaliere non possono essere minori di zero!');
        }

        return $retribuzioneOraria * $this->oreGiornaliere;
    }
}
// definisco il primo dipendente
$dipendente_uno = new Dipendente
(   'bla',
    'psoeno34n3o',
    'servizi',
    '546',
    'marketing',
    '4',
    '8');
// definisco il secondo dipendente
$dipendente_due = new Dipendente
(   'bla',
    'psoeno34n3o',
    'servizi',
    '546',
    'sales',
    '8',
    '8'
);

echo '<pre>';
var_dump($dipendente_uno);
echo '</pre>';

echo $dipendente_uno->calcolaSalario(8);
echo '<br>';
echo $dipendente_due->calcolaSalario(10);
// ho inserito anche  il controllo con il try ma mi sono reso conto che non aveva molto senso dato il precedente
// controllo più profondo effettuato all'interno della funzione
//try {
//    echo $dipendente_uno->calcolaSalario(8);
//} catch (Expection $e) {
//    echo 'si è verificato un errore';
//}

