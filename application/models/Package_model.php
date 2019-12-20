<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Package_model extends CI_Model
    {
//        public function __construct(){
//            
//        }
        
        public function get_packages(){
            
            //gets packages
            $result = $this->db->get('packages');
            
            //checks if theres a record
            if($result->num_rows() > 1){
                return $result->result_array(); 
			} else {
				return false;
			}
        }

        public function package($name){

            //gets package details
            $this->db->where('p_name', $name);

            $result = $this->db->get('packages');

            //checks if theres a record
            if($result->num_rows() == 1){
                return $result->row(0); 
			} else {
				return false;
			}
        }
    }