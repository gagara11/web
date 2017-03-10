<?php 
	class Product
	{
		var $Id;	
		var $Name;	
		var $Title;	
		var $OwnerId;	
		var $Description;	
		var $Price;	
		
		function __construct($Id, $Name, $Title, $OwnerId, $Description, $Price)
		{
			$this->Id	=	$Id;
			$this->Name	=	$Name;
			$this->Title	=	$Title;
			$this->OwnerId	=	$OwnerId;
			$this->Description	=	$Description;
			$this->Price	=	$Price;
		}
	}
?>