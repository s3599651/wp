
<?php

function head($Assignment2, $onLoad = ''){
  $output = <<<"HEAD"
  <!DOCTYPE html>
  <html lang='en'>
    <head>
      <meta charset="utf-8">
      <title>$Assignment2</title>

      <!-- Keep wireframe.css for debugging, add your css to style.css -->
      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
      <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
      <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
      <link href = "https://fonts.googleapis.com/css?family=Arimo" rel = "stylesheet">
      <script src='../wireframe.js'></script>
    </head>
HEAD;
  echo $output;

}
