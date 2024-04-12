<?php

$text = $_POST['text'];
$word = $_POST['word'];

$text_length = strlen($text);

$text_censored = str_replace($word, '***', $text);

$text_censored_length = strlen($text_censored);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous' />

  <title>PHP Badwords</title>
</head>

<body>

  <div class="container my-5">

    <div class="my-5">
      <h2>Testo inserito:</h2>
      <p> <?php echo $text ?> </p>
      <h5 class="mt-5">Lunghezza testo: <?php echo $text_length ?> caratteri. </h5>
    </div>

    <div class="my-5">
      <h2>Testo con parola censurata:</h2>
      <p> <?php echo $text_censored ?> </p>
      <h5 class="mt-5">Lunghezza testo: <?php echo $text_censored_length ?> caratteri. </h5>
    </div>

  </div>

</body>

</html>