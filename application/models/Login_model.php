<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {

        public function try_login($user,$pass) {
       	 	$this->db->where('username',$user);
            $this->db->where('password',$pass);
            $query = $this->db->get('tbluser_accounts');
            if($query->num_rows() > 0){
                return true;
            }else{
                return false;
            }
        }

        public function getUserID($user,$pass){
            $this->db->where('username',$user);
            $this->db->where('password',$pass);
            $query = $this->db->get('tbluser_accounts');
            $res = $query->row();
               return $res->user_account_id;
        }

        public function register($user,$pass){
            $data = array(
                'username' => $user,
                'password' => $pass,
                'user_type' => "member"
            );
            $this->db->insert('tbluser_accounts', $data);

        }

        	
		
}