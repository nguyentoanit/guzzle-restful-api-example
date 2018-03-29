<?php 
	require 'vendor/autoload.php';
	use GuzzleHttp\Client;

	$client = new Client([
	    // Base URI is used with relative requests
	    'base_uri' => 'https://reqres.in/',
	    // You can set any number of default request options.
	    'timeout'  => 2.0,
	]);
	//GET method
	$response = $client->request('GET', '/api/users');
	$body = $response->getBody()->getContents();
	echo "$body\n\n";
	
	//POST method
	$response = $client->request('POST', '/api/register', [
		'form_params' => [
			'email' => 'sydney@fife',
			'password' => 'pistol'
		]
	]);
	$body = $response->getBody()->getContents();
	echo "$body\n\n";
	
	//PUT method
	$response = $client->request('PUT', '/api/register', [
		'form_params' => [
			'name' => 'morpheus',
			'job' => 'zion resident'
		]
	]);
	$body = $response->getBody()->getContents();
	echo "$body\n\n";
	
	//Response code = 204
	//DELETE method
	$response = $client->request('DELETE', '/api/users/2');
	$body = $response->getBody()->getContents();
	echo $response->getStatusCode()."\n\n";
?>
