
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
function footer(){
  $output = <<<"FOOTER"
  <footer class = "pagefooter">
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Chamila Rendage(s), s3599651(s)</div>
      <p> Spreadsheets: <a href = products.txt>products</a></p>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
FOOTER;
  echo $output;
}

function preShow( $arr, $returnAsString=false ) {
  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
  if ($returnAsString)
    return $ret;
  else
    echo $ret;
}

function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'>\n";
  foreach ($lines as $lineNo => $lineOfCode)
     printf("%3u: %1s \n", $lineNo, rtrim(htmlentities($lineOfCode)));
  echo "</pre>";

}
