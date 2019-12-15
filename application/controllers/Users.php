<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Users extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
            
		}
        
        public function login(){
            
            $data['title'] = 'Login Page';
            
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');
            
            if($this->form_validation->run() === FALSE){
                
                $this->load->view('users/login'); 
                
            }else{
                //get the email and password
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                
                //check if user exit
                $check = $this->user_model->login($email, $password);
                
                if($check == 0){
                    
                    echo "error1";
                    //logic goes here
                    
                }elseif($check == 1){
                    
                    //logic goes here
                    echo "error2";
                    
                }else{
                    
                    echo 'cool';
                    
                    // Create user session
//					$user_data = array(
//						'user_id' => ,
//                        'church_name'=> ,
//						'email' => ,
//                        'admin_role'=> ,
//                        'menu_role'=> ,
//						'logged_in' => true
//					);
                    
                    
                }
                
            }  
			
		}
        
        
        public function register()
        {
            
        }
        
	}