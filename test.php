<?php 
		echo "INICI";
		$get_data = callAPI('GET', 'https://emoji-api.com/categories/flags?access_key=0d7ed6a5ec106fbdaff3e862c99b3750908d0077',false);
		$response = json_decode($get_data, true);
		$errors = $response['response']['0'];
		$data = $response['response']['character'][0];
		print_r($data);
		echo "FINAL";
	?>
