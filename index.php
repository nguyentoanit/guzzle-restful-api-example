<?php 
	require 'vendor/autoload.php';
	use GuzzleHttp\Client;

	$client = new Client([
	    // Base URI is used with relative requests
	    'base_uri' => 'https://reqres.in/',
	    // You can set any number of default request options.
	    'timeout'  => 2.0,
	]);
	$response = $client->request('GET', '/api/users/2');
	$body = $response->getBody()->getContents();
?>
