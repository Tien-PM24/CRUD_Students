<?php
$json = '{"a":1,"b":2,"c":3,"d":4}';

var_dump(json_decode($json)); 
var_dump(json_decode($json, true));
?>