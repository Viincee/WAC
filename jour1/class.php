<?php
$var = new Myclass;

class Myclass
{
	private $_perso;

	public function parle()
	{
		echo "Salut toi, moi c'est SAM !\n";
	}
}
$var = new Myclass;
$var->parle();