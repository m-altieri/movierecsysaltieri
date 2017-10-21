<?php

use GuzzleHttp\Client; include "recsysbot/restService/urls.php";;

function putUserAge($chatId, $ageRange){

	$userID = $chatId;
	//$client = new Client(['base_uri'=>'http://localhost:8080']);
   $client = new Client(['base_uri'=>getServiceBaseURL()]);
   $stringGetRequest = '/movierecsysrestful/restService/age/putUserAge?userID='.$userID.'&age='.$ageRange;
   $response = $client->request('GET', $stringGetRequest);
   $bodyMsg = $response->getBody()->getContents();
   $data = json_decode($bodyMsg);

   file_put_contents("php://stderr", getServiceBaseURL().$stringGetRequest."/return:".$data.PHP_EOL);

   return $data;
   
}