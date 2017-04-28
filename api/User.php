<?php

include $_SERVER['DOCUMENT_ROOT'].'/vk/services/UserService.php';
include $_SERVER['DOCUMENT_ROOT'].'/vk/helpers/requestHelper.php';




if(isset($_GET['format'])){
	$id=$_GET['id'];
	$user = GetUser($id);
	if($_GET['format']=='json'){
		echo ObjectToJson($user);
	}
	if($_GET['format']=='xml'){
		echo JSONtoXML(ObjectToJson($user))->asXml();
	}
}


?>