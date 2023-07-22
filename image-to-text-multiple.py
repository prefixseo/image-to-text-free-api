import requests

url = "https://image-to-text-ai-ocr.p.rapidapi.com/ocr/multiple"

payload = { "image_url": ["URL_1", "URL_2", "URL_3", "URL_4", "URL_5"] }
headers = {
	"content-type": "application/json",
	"X-RapidAPI-Key": "SIGN-UP-FOR-KEY",
	"X-RapidAPI-Host": "image-to-text-ai-ocr.p.rapidapi.com"
}

response = requests.post(url, json=payload, headers=headers)

print(response.json())