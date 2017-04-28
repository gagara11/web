<?php
include 'connect.php';
include $_SERVER['DOCUMENT_ROOT'].'/vk/services/GroupsService.php';
include $_SERVER['DOCUMENT_ROOT'].'/vk/helpers/requestHelper.php';


$parts = parse_url($url);
parse_str($parts['query'], $query);

if(in_array('format',$query)){
	$id=$query['id'];
	$groups = GetGroups($id);
	if($query['format']=='json'){
		echo ObjectToJson($groups);
	}
	if($query['format']=='xml'){
		echo JSONToXml(ObjectToJson($groups));
	}
}


?>