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
		//$data = $this->json->G();

		//gets all the packages
		$package = $this->package_model->get_packages();

		$data['package'] = $package;

		$this->load->view('layout/landing-header');
		$this->load->view('welcome/welcome_message', $data);
		$this->load->view('layout/landing-footer');
	}
}
