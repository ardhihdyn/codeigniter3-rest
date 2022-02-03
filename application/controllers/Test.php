<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Test extends RestController {

	public function index_get()
	{
		Logger::info("Someone get data");
		$this->response([
	        	"status" 	=> "Work",
	        	"message"	=> "Get Work"
	        ], 200);
	}

	public function index_post()
	{
		$this->response([
	        	"status" 	=> "Work",
	        	"message"	=> "Post work"
	        ], 200);
	}
}
