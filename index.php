<?php
$filename = date('Ymdhis');
$file = fopen($filename.'.txt', 'w');
$post = $_POST;
$get = $_GET;
$content = $get;
fwrite($file, json_encode($content, true));
 ?>