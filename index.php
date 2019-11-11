<?php

$data = ['hello' => 'world'];
header('Content-Type: application/json');
echo json_encode($data);
