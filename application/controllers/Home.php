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
		$this->load->view('home',$data);
		$this->load->view('footer');
	}
    
    public function about()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');

	}

    
    	public function news_detail($id)
	{
		$limit = 5;
		$data['detail'] = $this->M_news->get_by_id($id);
		$data['news'] = $this->M_news->get_limit_data($limit)->result();
		$this->load->view('header');
		$this->load->view('news_detail', $data);
		$this->load->view('footer');
	}

    
    public function v_news()
	{
		$jumlah_data = $this->M_news->count_all();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/news/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 9;
		$from = $this->uri->segment(3);
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="current"><span>';
		$config['cur_tag_close'] = '</span></li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		$data['allnews'] = $this->M_news->data($config['per_page'],$from);
		$this->load->view('header');
		$this->load->view('v_news', $data);
		$this->load->view('footer');
	}

    
    public function v_galery()
	{
		$jumlah_data = $this->M_galery->count_all();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/galery/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 12;
		$from = $this->uri->segment(3);
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['next_link'] = '<i class="fa fa-angle-right"></i>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '<i class="fa fa-angle-left"></i>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="current"><span>';
		$config['cur_tag_close'] = '</span></li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		$data['allgalery'] = $this->M_galery->data($config['per_page'],$from);
		$this->load->view('header');
		$this->load->view('v_galery', $data);
		$this->load->view('footer');
	}

	private function page(){

	}

}
