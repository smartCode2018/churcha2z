<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Json
	{

		//output json
		public function O($data, $output = false){
			$http_origin = $_SERVER['HTTP_HOST'];

			$allowed_domains = array(
				'http://localhost',
			);

			if (in_array($http_origin, $allowed_domains)){
				header("Access-Control-Allow-Origin: *");
			}

			//prepare json

			header("content-type: application/json");
			if($output){
				exit(json_encode($data));
			}else{
				return json_encode($data);
			}
		}

		
	

		//get raw data and filter it
		public function G(){
			$raw = file_get_contents('php://input');
			if($raw == null){
				return false;
			}
			$raw = json_decode($raw, true);
			if(count($raw) < 1){
				//the var is empty
				return false;
			}

			foreach ($raw as $key => $value) {
				if(strlen($value) < 1){
					return false;
				}
			}

			//data is clean, output it
			return $raw;
		}
	}

	