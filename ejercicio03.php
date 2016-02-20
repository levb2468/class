<html>
<head>
<title>Colaboracion de Odjetos</title>title>
</head>head>

<<body>
<?php
class Cabecero//clase
{
  private $texto;//atributo
  public function __construct($titulo)//metodo
  {
  	$this->texto=$titulo;
  }
   public function graficar()//metodo
   {
   	//echo "<h1>".$this->texto."</<h1>";
   	?>
   	<h1><?php echo $this->texto;?></h1>	
   	<?php

   }
}
//********************************************************
class Cuerpo
{
  private $lineas=array();

  public function iniciar_lineas($li)
  {
    $this->lineas[]=$li;
  }

  public function graficar()
  {
     for($i=0;$i<sizeof($this->lineas);$i++)
     {
       ?>
       <p><?php echo $this->lineas[$i];?></p>
       <?php
     }
  }
}
//**********************************************************************
class Footer
{
  private $texto;
  public function __construct($cadena)
  {
    $this->texto=$cadena;
  }

  public function graficar()
  {
     ?>
     <hr />
     <?php echo $this->texto;?>
  
     <?php
  }
}

//********************************************
//creamos una clase para implementar la colaboracion de classes u objetos
class Pagina
{
  private $cabecera;
  private $body;
  private $pie;

  public function __construct($texto_cabecero,$texto_pie)
  {
    $this->cabecera=new Cabecero($texto_cabecero);
    $this->body=new Cuerpo();
    $this->pie=new Footer($texto_pie);
  }
  public function iniciar_cuerpo($texto)
  {
    $this->body->iniciar_lineas($texto);
  }
  public function vista()
  {
     $this->cabecera->graficar();
     $this->body->graficar(); 
     $this->pie->graficar();
  }
} 
//*****************************************************
//ahora creamos las pistas de nuestro proyecto
$pag=new Pagina("Ejemplo de colaboracion de clases","Desarrollado por luis vicente quin empiesa aprender a programar");
$pag->iniciar_cuerpo("mi primer parrafo");
$pag->iniciar_cuerpo("mi segundo parrafo");
$pag->iniciar_cuerpo("mi tercer parrafo");
$pag->iniciar_cuerpo("mi cuarto parrafo");
$pag->vista();

?>  
</body>
</html>