<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://image-to-text-ai-ocr.p.rapidapi.com/ocr",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => json_encode([
		'image_url' => '_IMAGE_VALID_URL_HERE_'
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