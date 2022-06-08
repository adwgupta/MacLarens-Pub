<?php
$meta = <<<HTML
   <meta charset="UTF-8">
   <link rel="stylesheet" href="css/style.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
   <link rel="logo" type="image/png" href="imgages/logo.png">

HTML;
echo $meta;
printf("\t<title>%s</title>\n", $pageTitle);
