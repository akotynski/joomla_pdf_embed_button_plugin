<?php
$name = $_GET["name"];
$width = $_GET["width"];
$height = $_GET["height"];
$pdf = $_GET["pdf"];
$engine = $_GET["engine"];


$txt = "{pdf=" . $pdf . "|" . $width . "|" . $height . "|" . $engine . "}";

$insertCode = 'window.parent.jInsertEditorText("' . $txt . '", "' . $name . '");';
$closeWindow = 'window.parent.document.getElementById("sbox-btn-close").click();';
$scriptToAttach = "<script>" . $insertCode . $closeWindow . "</script>";
echo $scriptToAttach;