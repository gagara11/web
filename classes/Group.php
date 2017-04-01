<?php 
	class Group 
	{
		var $Id;	// ID группы
		var $Name;	// Имя группы
		var $Type;	// Тип

		
		function __construct($Id, $Name, $Type)
		{
			$this->Id	=	$Id;
			$this->Name	=	$Name;
			$this->Type	=	$Type;
		}
	}
?>