<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_subscribe');
	}

	public function ajax_list()
	{

		$list = $this->m_subscribe->get_datatables();
		$data = array();
		$numbring = 1;
		$no = $_POST['start'];
		foreach ($list as $subs) {
			$no++;
			$row = array();
			$row[] = $numbring++;
			$row[] = $subs->email;
			$row[] = $subs->tgl;


			//add html for action
			$row[] = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_subs('."'".$subs->id_subscribe."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->m_subscribe->count_all(),
			"recordsFiltered" => $this->m_subscribe->count_filtered(),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->m_subscribe->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_delete($id)
	{
		$person = $this->m_subscribe->get_by_id($id);		
		$this->m_subscribe->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
}
