<?php
class pagina
{
  private $titulo;
  private $posision;
  public function iniciar($tit,$pos)
  {
  	$this->titulo=$tit;
  	$this->posision=$pos;
  }

  public function imprimir()
  {
  	echo $this->titulo.$this->posision;

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
$pa->iniciar("TITULO DE PRUEVA","center");
$pa->imprimir();


?>	
</body>
</html>