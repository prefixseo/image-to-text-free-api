AsyncHttpClient client = new DefaultAsyncHttpClient();
client.prepare("POST", "https://image-to-text-ai-ocr.p.rapidapi.com/ocr/multiple")
	.setHeader("content-type", "application/json")
	.setHeader("X-RapidAPI-Key", "SIGN-UP-FOR-KEY")
	.setHeader("X-RapidAPI-Host", "image-to-text-ai-ocr.p.rapidapi.com")
	.setBody("{\r\n    \"image_url\": [\r\n        \"URL_1\",\r\n        \"URL_2\",\r\n        \"URL_3\",\r\n        \"URL_4\",\r\n        \"URL_5\"\r\n    ]\r\n}")
	.execute()
	.toCompletableFuture()
	.thenAccept(System.out::println)
	.join();

client.close();