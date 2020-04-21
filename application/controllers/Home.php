<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('M_news', 'M_slider', 'M_galery'));
	}

	public function index()
	{
		$limit = 3;
		$data['slider'] = $this->M_slider->get_all_data()->result();
		$data['galery']	= $this->M_galery->get_all_data()->result();
		$data['news']	= $this->M_news->get_limit_data($limit)->result();
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
    
 public function about()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');

	}
    
    public function schedule()
	{
		$this->load->view('header');
		$this->load->view('schedule');
		$this->load->view('footer');
	}


}
