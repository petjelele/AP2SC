<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_auth');
	}

	public function index()
	{
		$this->load->view('backend/login');
	}

	public function action_login()
	{
		$userName 	= $this->input->post('usrName');
		$passWord	= $this->input->post('passWd');
		$where = array(
			'username' 	=> $userName,
			'passwd'	=> $passWord
		);
		$cek = $this->m_auth->check_auth("tb_admin", $this->security->xss_clean($where))->row();
		if($cek){
			$session = array(
				'status' 	=> 'loGin',
				'nama'	 	=> $cek->nama,
				'username'	=> $cek->usename,
				'passwd'	=> $cek->passwd,
				'id_admin'	=> $cek->id_admin
			);
			$this->session->set_userdata($session);
			redirect('welcome');
		}
        else{
			redirect('auth');
		}
	}

	public function action_logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}
    
}
