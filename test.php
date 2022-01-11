<?php

// CLASSE PEINCIPALE PADRE



class Libro 
{
	// PROPRIETA
	public $titolo;
	public $autore;
	public $prezzo;

	// METODI
	public function __construct($_titolo, $_autore, $_prezzo)
	{
		$this->titolo = $_titolo;
		$this->autore = $_autore;
		$this->prezzo = $_prezzo;

	}

	public function GET_sconto($percentuale){
		$sconto = $this->prezzo - ($this->prezzo * $percentuale / 100);
		// number_format arotonda numero
		return number_format($sconto, 2);
	}
}
// FIGLIA EREDIARIETA

class Manuale extends Libro
{
	// proprieta/variabile 
	public $argomento;
	// COSTRUTORE PER SETTARE PROPRIETA DI FIGLIA 
	public function __construct($argomento,$_titolo, $_autore, $_prezzo)
	{
		// parent:: si riferische a padre (Libro) e puo portare a classe figlia
		// tuti proprieta e metodi	
		parent::__construct($_titolo, $_autore, $_prezzo);
		$this->argomento = $argomento;
	}

	// methodi 
	public function GET_argomento(){
		return $this->argomento;
	}
	// POLIMORFISMO
	// sovrascritura parziale
	public function GET_sconto($percentuale){
		$sconto =  parent::GET_sconto($percentuale); //senza referenza sara sovrascritura totale
		return $sconto - 1;
	}

}


// ISTANZE OGGETTI

// da classe padre 
$book1 = new Libro('book', 'Paolo Duxsioni', '10');

var_dump($book1);
?>
<?php echo $book1->GET_sconto(10)?><br>

<?php
//  da classe figlia 
$scacchi = new Manuale('scacchi','book2figlia', 'Paolo Duzioni', 10);
var_dump($scacchi);

echo 'Argomento Manuale: '.$scacchi->GET_argomento().'<br>';
// INTERPOLAZIONE
echo "Argomento Manuale: {$scacchi->GET_argomento()} <br>"; //<---- FUNZIONA SOLO CON APICI ""

echo "Sconto: {$scacchi->GET_sconto(10)}<br>";// <---- invocazione di methodo di padre atraverso figlio
echo "Sconto: {$scacchi->GET_sconto(10)}<br>";
