<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('m_subscribe', 'm_inbox'));
	}

	public function add_subs(){
		$where = array(
			'email' => $this->input->post('eMail')
		);
		$data = array(
			'email' => $this->input->post('eMail'),
			'tgl' => date('Y-m-d')
		);
		$cek = $this->m_subscribe->cek_email('tb_subscribe', $where)->row();
		if($cek){
			$test =  'ada';
		}else{
			$insert = $this->m_subscribe->save($this->security->xss_clean($data));
			$test = 'tidak';
		}
		echo json_encode($test);
	}

	public function pesan_masuk()
	{
		$data = array(
			'nama' => $this->input->post('namA'),
			'email' => $this->input->post('emaiL'),
			'subject' => $this->input->post('subjecT'),
			'tanya'	=> $this->input->post('messagE'),
			'tgl' => date('Y-m-d'),
			'sts' => 0
		);

		$tambah = $this->m_inbox->save($this->security->xss_clean($data));
		echo json_encode(array("status" => TRUE));
	}
}
