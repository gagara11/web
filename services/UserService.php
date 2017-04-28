<?php

include $_SERVER['DOCUMENT_ROOT'].'/vk/classes/User.php';

    
	function GetUser($userID)	// ID ��� �������� ��������� (��� �� ����� ����� �������)
	{
		$vkToken = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/vk/token.txt');
		$users_data = GetResponse("https://api.vk.com/method/users.get?user_ids=$userID&fields=online,photo_max_orig,status,bdate,city,country,sex,screen_name&access_token=$vkToken");	
		$userArray;
		foreach ($users_data as $field => $value)
		{	
			$userArray[] = new User($value['uid'],$value['first_name'],$value['last_name'],$value['screen_name'],$value['sex'],$value['bdate'],$value['country'],$value['city'],$value['status']);
		}
		return $userArray;	
	}
?>