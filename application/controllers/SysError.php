<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class SysError extends RestController {

	public function index()
	{
		$this->response([
	        	"error" 	=> "Not Found",
	        	"message"	=> "Url not found"
	        ], 404);
	}
}
