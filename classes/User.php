<?php 
	class User //https://vk.com/dev/account.getProfileInfo?params[v]=5.62
	{
		var $Id;	// ID пользователя
		var $Name;	// Имя пользователя
		var $SurName;	// Фамилия пользователя
		var $ScreenName;	// Короткое имя пользователя ("Ник", если есть)
		var $Gender;	// Пол (1 - Ж, 2 - М, 0 - н/у)
		var $FamilyStatus;	// Семейное положение (1 — не женат/замужем, 2 — есть друг/подруга, 3 — помолвлен/помолвлена, 4 — женат/замужем, 5 — всё сложно, 6 — в активном поиске, 7 — влюблён/влюблена, 8 — в гражданском браке, 0 — не указано)
		var $Birthday;	// Дата рождения
		var $HomeTown;	// Родной город
		var $Country;	//  Страна
		var $City;	// Город 
		var $Status;	// Статус пользователя
		var $PhoneNumber;	// Номер телефона
		
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