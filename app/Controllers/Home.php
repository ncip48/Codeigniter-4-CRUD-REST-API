<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Home extends ResourceController
{
	protected $format = 'json';
	public function index()
	{
		$response = [
			'message' => "Hello world!",
		];
		return $this->respond($response, 200);
	}

	//--------------------------------------------------------------------

}
