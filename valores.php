<?php

class valores
{
	protected $valor1;
	protected $valor2;
	protected $resultado;

	public function cargar1($var1)
	{
		$this->valor1=$var1;
	}

	public function cargar2($var2)
	{
		$this->valor2=$var2;
	}

	public function imprimir()
	{
		echo "el resultado de la  suma es :";
		echo $this->resultado;

	}	
}
//**********************************************************************************************

class sumar extends valores
{
	public function operarar()
	{
		$this->resultado=$this->valor1 + $this->valor2;
	}
}
//*********************************************************************************************


//**********************************************************************************************
$suma=new sumar();
$suma->cargar1("40");
$suma->cargar2("10");
$suma->operarar();
$suma->imprimir();
echo "la suma de los dos valores es :".$suma->imprimir();
?>