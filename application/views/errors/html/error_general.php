<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Content-Type: application/json; charset=utf-8');
echo json_encode([
	"error" => $heading,
	"message" => strip_tags($message)
]);
?>