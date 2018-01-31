<?php

var_dump($_POST['data']);
echo "<hr/>";
$data = json_decode($_POST['data'], true);
var_dump($data);