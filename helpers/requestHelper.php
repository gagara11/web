<?php


	function GetResponse($queryUrl)
	{
		
		$queryResult = file_get_contents($queryUrl);
		$data = json_decode($queryResult, true);	

		$data = $data['response'];
		return $data;	
	}
	function ObjectToXML($data)
    {
        $arr = json_decode($data, true);
        $xml = new SimpleXMLElement('<root/>');
        //$arr = array_reverse($arr);
        array_walk_recursive($arr, array($xml, 'addChild'));
        return $xml->asXML();
    }
    function ObjectToJSON($object)
    {
        return json_encode($object, JSON_UNESCAPED_UNICODE);
    }
    function JSONtoXML($json)
    {
        $xml = new SimpleXMLElement('<data/>');
        arrayToXml(json_decode($json, false), $xml);
        return html_entity_decode($xml->asXML(), ENT_QUOTES, 'utf-8');
    }
    function ArrayToXml($array, &$xml)
    {
        foreach ($array as $key => $value) {
            if (is_array($value) || is_object($value)) {
                ArrayToXml($value, $xml->addChild($key));
            } else {
                $xml->addChild($key, htmlspecialchars($value));
            }
        }
    }

?>