<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class User_model extends CI_Model
    {
//        public function __construct(){
//            
//        }
        
        public function login($email, $password){
            
            //validate user

			$this->db->where('u_email', $email);
            
            $result = $this->db->get('users');
            
            //checks if theres a record
            if($result->num_rows() == 1){
                
                //checks if the password matches
                if(password_verify($password, $result->row(0)->u_password)){
                    
                    //checks if its a first time record
                    if($result->row(0)->u_app_key != ''){
                        return $result->row(0);
                    }else{
                        return 1;
                    }
                    
                  }else{
                    return 0;
                  }
                
			} else {
				return 0;
			}
                
        }
    }