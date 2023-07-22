const axios = require('axios');

const options = {
  method: 'POST',
  url: 'https://image-to-text-ai-ocr.p.rapidapi.com/ocr/multiple',
  headers: {
    'content-type': 'application/json',
    'X-RapidAPI-Key': 'SIGN-UP-FOR-KEY',
    'X-RapidAPI-Host': 'image-to-text-ai-ocr.p.rapidapi.com'
  },
  data: {
    image_url: [
      'URL_1',
      'URL_2',
      'URL_3',
      'URL_4',
      'URL_5'
    ]
  }
};

try {
	const response = await axios.request(options);
	console.log(response.data);
} catch (error) {
	console.error(error);
}