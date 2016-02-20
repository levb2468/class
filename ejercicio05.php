<?php

class persona
{
	private $nombre=array();
	
	public function iniciar($nomb)
	{

	$this->nombre=$nomb;
	
    }

	public function listar_nombre()
	{
		return $this->nombre;
	}
}

$persona =new persona();

?>