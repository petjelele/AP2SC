<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != 'loGin'){
			redirect(base_url('auth'));
		};
		$this->load->model(array('M_news', 'M_galery', 'M_slider', 'M_inbox', 'M_subscribe'));
	}

	public function index()
	{
		$data['jmlSlider']	= $this->M_slider->count_all();
		$data['jmlGal']		= $this->M_galery->count_all();
		$data['jmlNews']	= $this->M_news->count_all();
		$data['jmlInbox']	= $this->M_inbox->count_all();
		$data['jmlSubs']	= $this->M_subscribe->count_all();
		$this->load->view('backend/header');
		$this->load->view('backend/home', $this->security->xss_clean($data));
	}

	public function slider()
	{
		$this->load->view('backend/header');
		$this->load->view('backend/slider');
	}

	public function galery()
	{
		$this->load->view('backend/header');
		$this->load->view('backend/galery');
	}

	public function news()
	{
		$this->load->view('backend/header');
		$this->load->view('backend/news');
	}

	public function subscribe()
	{
		$this->load->view('backend/header');
		$this->load->view('backend/subscribe');
	}

	public function inbox()
	{
		$this->load->view('backend/header');
		$this->load->view('backend/inbox');
	}
}
