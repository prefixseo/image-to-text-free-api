AsyncHttpClient client = new DefaultAsyncHttpClient();
client.prepare("POST", "https://image-to-text-ai-ocr.p.rapidapi.com/ocr")
	.setHeader("content-type", "application/json")
	.setHeader("X-RapidAPI-Key", "SIGN-UP-FOR-KEY")
	.setHeader("X-RapidAPI-Host", "image-to-text-ai-ocr.p.rapidapi.com")
	.setBody("{\r\n    \"image_url\": \"_IMAGE_VALID_URL_HERE_\"\r\n}")
	.execute()
	.toCompletableFuture()
	.thenAccept(System.out::println)
	.join();

client.close();