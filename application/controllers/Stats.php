<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Stats extends CI_Controller {

        public function index()
        {

	        $data['error_message'] = "";
                $data['location'] = "public/contents-css/login.css";
            $this->load->view('templates/ip');
	        $this->load->view('templates/header',$data);
	        $this->load->view('pages/login',$data);
	        $this->load->view('templates/footer');
        }

        public function login_validation()
        {       
                	$this->load->library('form_validation');
                	$this->form_validation->set_rules('username','Username','required');
                	$this->form_validation->set_rules('password','Password','required');
        	if($this->form_validation->run()){
        		$user = $this->input->post('username');
        		$pass = $this->input->post('password');
                        $this->load->model('Login_model');
                        if($this->Login_model->try_login($user,$pass)){
                                $data['accn_num'] = $this->Login_model->getUserId($user,$pass);
                                $data['location'] = "public/contents-css/user.css";
                                $this->load->view('templates/header',$data);
                                $this->load->view('pages/main-menu',$data);
                                $this->load->view('templates/footer');

                        }else{

                                $data['error_message'] = "Invalid Username/Password";
                                $data['location'] = "public/contents-css/login.css";
                                $this->load->view('templates/header',$data);
                                $this->load->view('pages/login',$data);
                                $this->load->view('templates/footer');

                        }

        	}else{
        		$data['error_message'] = "The Username/Password field is required";
	        	$data['location'] = "public/contents-css/login.css";
                        $this->load->view('templates/header',$data);
	        	$this->load->view('pages/login',$data);
	        	$this->load->view('templates/footer');
        	}

        }
        public function register()
        {       $data['location'] = "public/contents-css/login.css";
                $data['error'] = "";
                $this->load->view('templates/header',$data);
                $this->load->view('pages/register',$data);
                $this->load->view('templates/footer');

        }
         public function register_submit()
        {       
                $this->load->library('form_validation');
                $this->form_validation->set_rules('username','Username','required');
                $this->form_validation->set_rules('password','Password','required');
                if($this->form_validation->run()){
                        $this->load->model('Login_model');
                        $user = $this->input->post('username');
                        $pass = $this->input->post('password');     
                        $this->Login_model->register($user,$pass);
                        $this->index();
                }
                else{
                        $data['location'] = "public/contents-css/login.css";
                        $data['error'] = "All field required!";
                        $this->load->view('templates/header',$data);
                        $this->load->view('pages/register',$data);
                        $this->load->view('templates/footer');

                }
                
                 

        }
}