<?php 
	class User //https://vk.com/dev/account.getProfileInfo?params[v]=5.62
	{
		var $Id;	// ID ������������
		var $Name;	// ��� ������������
		var $SurName;	// ������� ������������
		var $ScreenName;	// �������� ��� ������������ ("���", ���� ����)
		var $Gender;	// ��� (1 - �, 2 - �, 0 - �/�)
		var $FamilyStatus;	// �������� ��������� (1 � �� �����/�������, 2 � ���� ����/�������, 3 � ���������/����������, 4 � �����/�������, 5 � �� ������, 6 � � �������� ������, 7 � ������/��������, 8 � � ����������� �����, 0 � �� �������)
		var $Birthday;	// ���� ��������
		var $HomeTown;	// ������ �����
		var $Country;	//  ������
		var $City;	// ����� 
		var $Status;	// ������ ������������
		var $PhoneNumber;	// ����� ��������
		
		function __construct($Id, $Name, $SurName, $ScreenName, $Gender, 
							$Birthday,  $Country, $City, $Status)
		{
			$this->Id	=	$Id;
			$this->Name	=	$Name;
			$this->SurName	=	$SurName;
			$this->ScreenName	=	$ScreenName;
			$this->Gender	=	$Gender;
			$this->Birthday	=	$Birthday;
			$this->Country	=	$Country;
			$this->City	=	$City;
			$this->Status	=	$Status;
		}
	}
?>