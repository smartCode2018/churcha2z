<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){

		parent::__construct();

		$this->load->library('auth',null,'auth');
		$this->load->library('json');
		$this->auth->isLogged(true);

	}

	public function index()
	{

        $data['title'] = 'Dashboard Coming Soon';
		$this->load->view('dashboard/index', $data);
	}
}
