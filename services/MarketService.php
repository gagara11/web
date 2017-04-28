<?php

include $_SERVER['DOCUMENT_ROOT'].'/vk/classes/Product.php';

    
	function GetProducts($groupId)	
	{
		$vkToken = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/vk/token.txt');
		$users_data = GetResponse("https://api.vk.com/method/market.get?owner_id=$groupId&access_token=$vkToken");	
		echo $users_data;
		$userArray;
		foreach ($users_data as $field => $value)
		{	
			$userArray[] = new Product($value['id'],$value['title'],$value['description'],$value['price']['amount']);
		}
		return $userArray;	
	}
?>