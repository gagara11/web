<?php

include 'classes/Group.php';



    
	function GetGroups($userID)	
	{
		$vkToken = file_get_contents('token.txt');
		$users_data = GetResponse("https://api.vk.com/method/groups.get?user_id=$userID&extended=1&filter=admin&fields=id,name,type&access_token=$vkToken");
		$userArray;
		foreach ($users_data as $field => $value)
		{	
			$userArray[] = new Group($value['gid'],$value['name'],$value['type']);
		}
		return $userArray;	
	}

?>