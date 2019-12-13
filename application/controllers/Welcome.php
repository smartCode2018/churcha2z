<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){

		parent::__construct();

		$this->load->library('auth',null,'auth');
		$this->load->library('json');
		// $this->auth->isLogged(true);

	}

	public function index()
	{
		$data = $this->json->G();
		$this->load->view('welcome/welcome_message');
	}
}
