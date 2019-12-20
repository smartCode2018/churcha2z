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

        //checks if key exist
        public function check_key($email){
            
            $this->db->where('u_email', $email);
            
            $result = $this->db->get('users');

            if($result->num_rows() == 1){
                if($result->row(0)->u_app_key != ''){
                    return false;
                }else{
                    return true;
                }
            }else{
                return false;
            }
        }


        //super user auth starts here
        public function signup($enc_password, $email){

            //check if user exist;
            $result = $this->db->where('su_email', $email);

            $result = $this->db->get('super_user');
            
            if($result->num_rows() == 1){
                return false;
            }else{

                // User data array
                $data = array(
                    'su_first_name' => $this->input->post('fname'),
                    'su_last_name' => $this->input->post('lname'),
                    'su_email' => $this->input->post('email'),
                    'su_password' => $enc_password
                );

                // Insert user
			    return $this->db->insert('super_user', $data);
            }
            
        }

        //sign in

        public function signin($email, $password){
            
            //validate user

			$this->db->where('su_email', $email);
            
            $result = $this->db->get('super_user');
            //checks if theres a record
            if($result->num_rows() == 1){
                
                //checks if the password matches
                if(password_verify($password, $result->row(0)->su_password)){
                    
                    // return $result->result_array();
                    return $result->row(0);
                    
                  }else{
                    return false;
                  }
                
			} else {
				return false;
			}
                
        }






    }