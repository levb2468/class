<?php
class pagina{
	private $titulo;
	private $posision;

public function iniciar($tit,$pos){

$this->titulo=$tit;
$this->posision=$pos;
} 

public function imprimir(){

	echo "div align='".$this->posision."'>".$this->titulo."</div>";
}


}

?>

<html>
<head>
<title>video 2</title>title>
</head>head>

<<body>
<?php 
$pa= new pagina();
$pa->iniciar("titulo de prieva","center");
$pa->imprimir();

echo "hola luis"
?>	
</body>
</html>