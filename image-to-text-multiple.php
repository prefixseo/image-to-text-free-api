<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://image-to-text-ai-ocr.p.rapidapi.com/ocr/multiple",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => json_encode([
		'image_url' => [
				'URL_1',
				'URL_2',
				'URL_3',
				'URL_4',
				'URL_5'
		]
	]),
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: image-to-text-ai-ocr.p.rapidapi.com",
		"X-RapidAPI-Key: SIGN-UP-FOR-KEY",
		"content-type: application/json"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}