<?php

$name = $_GET["name"];
$width = $_GET["width"];
$height = $_GET["height"];


$scriptName = "pdf.php";

echo '<form action="' . $scriptName . '">
<input style="display: none;" type="text" name="name" value="' . $name . '">
<br>
PDF: <input style=" width: 600px;" type="text" name="pdf" value="enter pdf url"><br>
<br>
Width: <input type="text" name="width" value="' . $width . '"><br>
<br>
Height: <input type="text" name="height" value="' . $height . '"><br>
<br>
Style: <input type="radio" name="engine" value="native">Native <input type="radio" name="engine" value="google" checked>Google <input type="radio" name="engine" value="pdfjs">pdfjs
<br><br>
<input type="submit" value="Insert PDF">
</form>';
