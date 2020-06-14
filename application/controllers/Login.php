<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mlogin');
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function auth(){
		$user=$_POST['username'];
		$pass=md5($_POST['password']);
		$query=$this->Mlogin->userauth($user,$pass);
		$cek=($query)->num_rows();
		if($cek>0){
			$this->session->set_userdata('user', $user);
			redirect('home');
		}
		else{
			redirect('login');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
