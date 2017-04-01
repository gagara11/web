<?php


	function GetResponse($queryUrl)
	{
		
		$queryResult = file_get_contents($queryUrl);
		$data = json_decode($queryResult, true);	

		$data = $data['response'];
		echo $data;
		return $data;	
	}

?>