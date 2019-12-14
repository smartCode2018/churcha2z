<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Auth{

		public $context = null;

		public function __construct(){
			$this->context = get_instance();
		}

		public function isLogged($redirect = false){
			$check = $this->context->session->has_userdata('logged_in');
			if(!$check){
				if($redirect){
					redirect(base_url('users/login'));
				}else{
					return false;
				}
			}else{
				return true;
			}
		}

		//checks user role
		public function forceRole($expect = 0){
			$userRole = (int)$this->context->session->userdata('user_role');
			if($expect != $userRole){
				//redirect to page not parmitted
				redirect(base_url('users/access_denied?link='.base64_encode(current_url())));
			}
		}


	
	}