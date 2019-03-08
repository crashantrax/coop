<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {

        public function index()
        {	
        	$user = $this->input->post_get('id');
        	$this->load->model('Users_model');

        	$data['profileinfo'] = $this->Users_model->getProfile($user);
        	$data['educinfo'] = $this->Users_model->getEduc($user);
        	$data['familyinfo'] = $this->Users_model->getFbg($user);
        	$data['businessinfo'] = $this->Users_model->getBus($user);
        	$data['empinfo'] = $this->Users_model->getEmp($user);

        	$data['location'] = "public/contents-css/profile.css";
                $this->load->view('templates/header',$data);
                $this->load->view('pages/user-dashboard',$data);
                $this->load->view('templates/footer');


        	
        }
    }
