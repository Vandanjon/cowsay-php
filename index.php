<!DOCTYPE html>
<html lang="fr">

<head>
    <title>55-60carac</title>
        
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="160carac">

    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <pre>
<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');
$bessie
->setEyes('oO')
->setTongue('U')
->setPoop('@@@')
->setUdder('W');

// or just echo the object for direct output
echo $bessie;
?>
  </pre>
</body>

</html>