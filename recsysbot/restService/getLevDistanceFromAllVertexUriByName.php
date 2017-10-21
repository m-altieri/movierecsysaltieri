<?php
 
use GuzzleHttp\Client; include "urls.php";

function getLevDistanceFromAllVertexUriByName($name){
	
	
	//$client = new Client(['base_uri'=>'http://localhost:8080']);
   $client = new Client(['base_uri'=>getServiceBaseURL()]);
   $stringGetRequest = '/movierecsysrestful/restService/levDistance/getLevDistanceFromAllVertexUriByName?name='.urlencode($name);      
   $response = $client->request('GET', $stringGetRequest);
   $bodyMsg = $response->getBody()->getContents();
   $data = json_decode($bodyMsg);

   file_put_contents("php://stderr", getServiceBaseURL().$stringGetRequest.PHP_EOL);

   return $data;
   
}