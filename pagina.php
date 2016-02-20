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
		echo "div aling='".$this->posision."'>".$this->titulo."</div>";
	}



}

?>