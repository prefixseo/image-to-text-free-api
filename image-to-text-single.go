package main

import (
	"fmt"
	"strings"
	"net/http"
	"io"
)

func main() {

	url := "https://image-to-text-ai-ocr.p.rapidapi.com/ocr"

	payload := strings.NewReader("{\r\n    \"image_url\": \"_IMAGE_VALID_URL_HERE_\"\r\n}")

	req, _ := http.NewRequest("POST", url, payload)

	req.Header.Add("content-type", "application/json")
	req.Header.Add("X-RapidAPI-Key", "SIGN-UP-FOR-KEY")
	req.Header.Add("X-RapidAPI-Host", "image-to-text-ai-ocr.p.rapidapi.com")

	res, _ := http.DefaultClient.Do(req)

	defer res.Body.Close()
	body, _ := io.ReadAll(res.Body)

	fmt.Println(res)
	fmt.Println(string(body))

}