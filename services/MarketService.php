<?php

include 'classes/Product.php';

    
	function GetProducts($groupId)	
	{
		$vkToken = file_get_contents('token.txt');
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