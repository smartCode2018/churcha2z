<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Users extends CI_Controller
	{
        private $ssk = 'svdhjknduj253737mn@&jdjdj';
		
		function __construct()
		{
            parent::__construct();
           
            $this->load->library('auth',null,'auth');
            $this->load->library('json');
            
		}
        

        public function login(){
           
            $data['title'] = 'Login Page';
            $data['sub_title'] = 'Please login to continue';
            
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');
            
            if($this->form_validation->run() === FALSE){
             $title = "ACCOUNT LOGIN";
             $sub_title = "Welcome to";
                //load header view
                $this->load->view('layout/landing-header');
                //load banner 
                $this->load->view('layout/banner-section',$data);
                //load content
                $this->load->view('users/page-login');
                //load footer view
                $this->load->view('layout/landing-footer');
                
            }else{
                //get the email and password
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                
                //check if user exit
                $check = $this->user_model->login($email, $password);
                
                if($check == 0){
                    
                    echo "User Does not exist";
                    //logic goes here
                    
                }elseif($check == 1){
                    
                    //User exit bt not authenticated

                    //creating an ssk;
                    $url_key = base64_encode($this->ssk);
                    $url_key = urlencode($url_key);

                    //encoding email
                    $user_email = base64_encode($email);
                    $user_email = urlencode($user_email);

                    redirect(base_url('users/enter_key/'.$url_key.'/'.$user_email));
                    
                }else{
                    
                    echo 'User found. redirects to dashboard';
                    
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
        

        public function register($id){
            
                 $data['title'] = "ACCOUNT SIGN-UP";
                 $data['sub_title'] = "Welcome to";

                $this->form_validation->set_rules('fname','First Name', 'required');
                $this->form_validation->set_rules('lname','Last Name', 'required');
                $this->form_validation->set_rules('email','Email', 'required');
                $this->form_validation->set_rules('password','Password', 'required');
                $this->form_validation->set_rules('password','Confirm Password', 'required');

                //decodes the url parameter
                $decode_id = urldecode($id);
                $decode_id = base64_decode($decode_id);

                
                if($this->form_validation->run() === FALSE){
                    //load header view
                    $this->load->view('layout/landing-header');
                    //load banner 
                    $this->load->view('layout/banner-section',$data);
                    //load content
                    $this->load->view('users/page-register');
                    //load footer view
                    $this->load->view('layout/landing-footer');
                }else{

                    if($decode_id == 'Regular'){


                    }elseif($decode_id == 'Standard'){
    
                    }elseif($decode_id == 'Standard'){
    
                    }else{
                        
                    }
                }
 
                    
            }
        
        
        //APPLICATION KEY AUTHENTICATION PAGE
        public function enter_key($ssk, $user_id){
            
            $title = "APP AUTHENTICATION";
            $sub_title = "One Time Authentication";

            //decodes the url parameter ssk
            $decode_ssk = urldecode($ssk);
            $decode_ssk = base64_decode($decode_ssk);

            //decodes the url parameter email
            $decode_email = urldecode($user_id);
            $decode_email = base64_decode($decode_email);

            //checks if app_key already exist
            $check_app_key = $this->user_model->check_key($decode_email);

            if($check_app_key){
                //load header view
                $this->load->view('layout/landing-header');
                //load banner 
                $this->load->view('layout/banner-section',array('title'=>$title,'sub_title'=>$sub_title));
                //load content
                $this->load->view('users/page-enter-key.php');
                //load footer view
                $this->load->view('layout/landing-footer');

            }else{
                //redirect to dashboard
                echo 'false';
            }
        }
        
        //CHECKOUT TO PAYMENT PAGE
        public function checkout($id){
            $this->auth->isLogged(true);

            $decode_id = urldecode($id);
            $decode_id = base64_decode($decode_id);

            $package = $this->package_model->package($decode_id);

            $data['title'] = "Checkout";
            $data['sub_title'] = "One Time Checkout";
            $data['package'] =  $package;
            //load header view
            $this->load->view('layout/landing-header');
            //load banner 
            $this->load->view('layout/banner-section',$data);
            //load content
            $this->load->view('users/page-checkout');
            //load footer view
            $this->load->view('layout/landing-footer');
        }


        
        //ACCOUNT AUTHENTICATION FOR SUPER USERS STARTS HERE
        public function sign_up($id = null){

            //check if the user has logged in before
            $status = $this->session->has_userdata('logged_in');

            if($status){
                //redirects to the dashboard
                redirect('dashboard/index');
            }
            
            $data['title'] = "Sign Up";
            $data['sub_title'] = "Get An Account";

            //validate form
            $this->form_validation->set_rules('fname','First Name', 'required');
            $this->form_validation->set_rules('lname','Last Name', 'required');
            $this->form_validation->set_rules('email','Email', 'required');
            $this->form_validation->set_rules('phone','Phone', 'required');
            $this->form_validation->set_rules('password','Password', 'required');

            if($this->form_validation->run() === FALSE){
                

                //load header view
                $this->load->view('layout/landing-header');
                //load banner 
                $this->load->view('layout/banner-section', $data);
                //load content
                $this->load->view('users/page-signup');
                //load footer view
                $this->load->view('layout/landing-footer');
            
            }else{
                //check if user exit

                // Encrypt password
                // $enc_password = md5($this->input->post('password'));

                $enc_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
                $email = $this->input->post('email');
                
                $check = $this->user_model->signup($enc_password, $email);

                if($check){
                    if($id != null){
                        $user_data = array(
                            'user_id' => $check->su_id,
                            'email' => $email,
                            'firstname' => $check->su_first_name,
                            'lastname' => $check->su_last_name,
                            'phone' => $check->su_phone,
                            'logged_in' => true
                        );
                        
                        $this->session->set_userdata($user_data);

                        redirect('checkout/'.$id);
                    }else{
                        $user_data = array(
                            'user_id' => $check->su_id,
                            'email' => $email,
                            'firstname' => $check->su_first_name,
                            'lastname' => $check->su_last_name,
                            'phone' => $check->su_phone,
                            'logged_in' => true
                        );
                        
                        $this->session->set_userdata($user_data);
                        
                        redirect('dashboard/home');
                    }  
                }else{

                    echo 'failed';
                    
                    //load error;
                    $data['error'] = 'User already exist';

                    //load header view
                    $this->load->view('layout/landing-header');
                    //load banner 
                    $this->load->view('layout/banner-section', $data);
                    //load content
                    $this->load->view('users/page-signup');
                    //load footer view
                    $this->load->view('layout/landing-footer');
                }

            }
            
        }

        public function sign_in(){

            $status = $this->session->has_userdata('logged_in');

            if($status){
                //redirects to the dashboard
                redirect('dashboard/index');
            }

            $data['title'] = 'Login Page';
            $data['sub_title'] = 'Please login to continue';
            
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');
            
            if($this->form_validation->run() === FALSE){
             
                //load header view
                $this->load->view('layout/landing-header');
                //load banner 
                $this->load->view('layout/banner-section',$data);
                //load content
                $this->load->view('users/page-login');
                //load footer view
                $this->load->view('layout/landing-footer');
                
            }else{
                //get the email and password
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                
                //check if user exit
                $check = $this->user_model->signin($email, $password);

                if($check){
                
                    // Create user session
					$user_data = array(
						'user_id' => $check->su_id,
                        'email' => $email,
                        'firstname' => $check->su_first_name,
                        'lastname' => $check->su_last_name,
                        'phone' => $check->su_phone,
						'logged_in' => true
                    );
                    
                    $this->session->set_userdata($user_data);
                    redirect('dashboard/index');

                }else{
                    echo 'User doesnt exist';
                }
            }
        }

        public function packages(){
            $data['title'] = "YOUR NEEDS";
            $data['sub_title'] = "Select A Package That Suits";

            //gets all the packages
		    $data['package'] = $this->package_model->get_packages();
               
            //load header view
               $this->load->view('layout/landing-header');
               //load banner 
               $this->load->view('layout/banner-section',$data);
               //load content
               $this->load->view('users/page-packages');
               //load footer view
               $this->load->view('layout/landing-footer');
        }
        
	}