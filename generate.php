<?php
require_once "phpqrcode/qrlib.php";

$path = "";
$file = $path . uniqid() . ".png";

$text = "Max Base\ngithub.com/basemax";

QRcode::png($text, $file, 'L', 10, 2);

print "<center><img src=\"{$file}\"></center>";
