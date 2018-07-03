<?php
$json_string = file_get_contents('php://input');
$json_obj = json_decode($json_string);
$json_obj->{'result'} = 'hoge'; 

header('content-type: application/json; charset=utf-8');
echo json_encode($json_obj);

