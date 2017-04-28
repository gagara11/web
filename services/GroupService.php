<?php

include $_SERVER['DOCUMENT_ROOT'].'/vk/classes/Group.php';



    
	function GetGroups($userID)	
	{
		$vkToken = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/vk/token.txt');
		$users_data = GetResponse("https://api.vk.com/method/groups.get?user_id=$userID&extended=1&filter=admin&fields=id,name,type&access_token=$vkToken");
		$userArray;
		foreach ($users_data as $field => $value)
		{	
			$userArray[] = new Group($value['gid'],$value['name'],$value['type']);
		}
		return $userArray;	
	}

?>