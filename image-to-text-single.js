const axios = require('axios');

const options = {
  method: 'POST',
  url: 'https://image-to-text-ai-ocr.p.rapidapi.com/ocr',
  headers: {
    'content-type': 'application/json',
    'X-RapidAPI-Key': 'SIGN-UP-FOR-KEY',
    'X-RapidAPI-Host': 'image-to-text-ai-ocr.p.rapidapi.com'
  },
  data: {
    image_url: '_IMAGE_VALID_URL_HERE_'
  }
};

try {
	const response = await axios.request(options);
	console.log(response.data);
} catch (error) {
	console.error(error);
}