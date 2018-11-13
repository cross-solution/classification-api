# CROSS Classification Api

_This API is currently in a very early state of development._


It's primary purpose will be to classify job advertisements based on its title and/or description text.

This will be accomplished by using `php-ai/php-ml`, and building the API itself with `zf-apigility`

## Planned classifications

* Employment type via title/description  
  \* Where employment types might be something like `full time`, `part time`, `internship`, etc.

## Basic operation

### Predicting

The API will take a string as input and classify them to a label which is returned in the response 
payload.

### Training

The API will consume a posted csv-File to train the guesser.
