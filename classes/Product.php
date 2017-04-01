<?php 
	class Product
	{
		var $Id;	
		var $Title;	
		var $Description;	
		var $Amount;	
		
		function __construct($Id, $Title, $Description, $Amount)
		{
			$this->Id	=	$Id;
			$this->Title	=	$Title;
			$this->Description	=	$Description;
			$this->Amount	=	$Amount;
		}
	}
?>