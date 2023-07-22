import requests

url = "https://image-to-text-ai-ocr.p.rapidapi.com/ocr"

payload = { "image_url": "_IMAGE_VALID_URL_HERE_" }
headers = {
	"content-type": "application/json",
	"X-RapidAPI-Key": "SIGN-UP-FOR-KEY",
	"X-RapidAPI-Host": "image-to-text-ai-ocr.p.rapidapi.com"
}

response = requests.post(url, json=payload, headers=headers)

print(response.json())