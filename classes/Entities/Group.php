<?php 
	class Group 
	{
		var $Id;	// ID ������
		var $Name;	// ��� ������
		var $Type;	// ������� ������������

		
		function __construct($Id, $Name, $Type)
		{
			$this->Id	=	$Id;
			$this->Name	=	$Name;
			$this->Type	=	$Type;
		}
	}
?>