<?php
use GuzzleHttp\Client;
function putWhyRecMovieRequest($chatId, $movieURI, $numberRecommendationList, $why) {
	$userID = $chatId;
	// $client = new Client(['base_uri'=>'http://localhost:8080']);
	$client = new Client ( [ 
			'base_uri' => 'http://193.204.187.192:8080' 
	] );
	$stringGetRequest = '/movierecsysrestful/restService/userWhyRecMovieRequest/putWhyRecMovieRequest?userID=' . $userID . '&movieURI=' . urlencode ( $movieURI ) . '&numberRecommendationList=' . $numberRecommendationList . '&why=' . $why;
	
	$response = $client->request ( 'GET', $stringGetRequest );
	$bodyMsg = $response->getBody ()->getContents ();
	$data = json_decode ( $bodyMsg );
	
	file_put_contents ( "php://stderr", "http://193.204.187.192:8080" . $stringGetRequest . "/return:" . $data . PHP_EOL );
	
	return $data;
}