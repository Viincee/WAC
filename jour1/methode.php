<?php

class Myclass
{
	private $_force;
	private $_experience = 100;
	private $_degats;

	public function winExperience()
	{
		echo 'Ton personnage viens de gagner '.$this->_experience.'xp';
	}

	public function winPX()
	{
		$this->_experience = $this->_experience +10;
	}
}
$perso = new Myclass;
$perso->winPX();
$perso->winExperience();