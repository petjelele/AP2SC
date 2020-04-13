<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		// if($this->session->userdata('status') != 'login'){
		// 	redirect(base_url('auth'));
		// };
		$this->load->model(array('M_news', 'M_galery', 'M_slider'));
	}

	public function index()
	{
		$data['jmlSlider']	= $this->M_slider->count_all();
		$data['jmlGal']		= $this->M_galery->count_all();
		$data['jmlNews']	= $this->M_news->count_all();
		$this->load->view('backend/header');
		$this->load->view('backend/home', $this->security->xss_clean($data));
	}
}
