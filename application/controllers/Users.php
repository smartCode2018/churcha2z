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
<<<<<<< HEAD
                
                $this->load->view('users/login'); 
=======
             $title = "ACCOUNT LOGIN";
             $sub_title = "Welcome to";
                //load header view
                $this->load->view('layout/landing-header');
                //load banner 
                $this->load->view('layout/banner-section',array('title'=>$title,'sub_title'=>$sub_title));
                //load content
                $this->load->view('users/page-login');
                //load footer view
                $this->load->view('layout/landing-footer');
>>>>>>> 75ec5d9377e054e023e2cbf585805a1df10dc3a2
                
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
			
<<<<<<< HEAD
		}
        
        
        public function register()
        {
            
        }
=======
        }
        

        public function register(){
            
           
             
                 $title = "ACCOUNT SIGN-UP";
                 $sub_title = "Welcome to";
                    //load header view
                    $this->load->view('layout/landing-header');
                    //load banner 
                    $this->load->view('layout/banner-section',array('title'=>$title,'sub_title'=>$sub_title));
                    //load content
                    $this->load->view('users/page-register');
                    //load footer view
                    $this->load->view('layout/landing-footer');
                    
            
                
            }
            //APPLICATION KEY AUTHENTICATION PAGE
        public function enterKey(){
             $title = "APP AUTHENTICATION";
                 $sub_title = "One Time Authentication";
                    //load header view
                    $this->load->view('layout/landing-header');
                    //load banner 
                    $this->load->view('layout/banner-section',array('title'=>$title,'sub_title'=>$sub_title));
                    //load content
                    $this->load->view('users/page-enter-key.php');
                    //load footer view
                    $this->load->view('layout/landing-footer');
            }
            //CHECKOUT TO PAYMENT PAGE
        public function checkout(){
             $title = "APP AUTHENTICATION";
                 $sub_title = "One Time Authentication";
                    //load header view
                    $this->load->view('layout/landing-header');
                    //load banner 
                    $this->load->view('layout/banner-section',array('title'=>$title,'sub_title'=>$sub_title));
                    //load content
                    $this->load->view('users/page-checkout.php');
                    //load footer view
                    $this->load->view('layout/landing-footer');
            }
>>>>>>> 75ec5d9377e054e023e2cbf585805a1df10dc3a2
        
	}