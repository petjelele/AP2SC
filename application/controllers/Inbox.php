<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_inbox');
	}

	public function ajax_list()
	{

		$list = $this->m_inbox->get_datatables();
		$data = array();
		$numbring = 1;
		$no = $_POST['start'];
		foreach ($list as $inbox) {
			$no++;
			$row = array();
			$row[] = $numbring++;
			$row[] = $inbox->nama;
			$row[] = $inbox->subject;
			$row[] = $inbox->tanya;
			$row[] = $inbox->tgl;
			if($inbox->sts == 0){
				$row[] = '<label class="label label-danger">Belum Dijawab</label>';
			}else{
				$row[] = '<label class="label label-success">Sudah Dijawab</label>';
			}
			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="reply_inbox('."'".$inbox->id_inbox."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_inbox('."'".$inbox->id_inbox."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->m_inbox->count_all(),
			"recordsFiltered" => $this->m_inbox->count_filtered(),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->m_inbox->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_update()
	{
		$this->_validate();
		$data = array(
			'nama' => htmlspecialchars($this->input->post('nama')),
			'tanya' => htmlspecialchars($this->input->post('tanya')),
			'email' => htmlspecialchars($this->input->post('email')),
			'subject' => htmlspecialchars($this->input->post('subjek')),
			'jawab' => htmlspecialchars($this->input->post('jawab')),
			'sts' => '1'
		);

		if($this->kirim_email($data)==true){
			$this->m_inbox->update(array('id_inbox' => $this->input->post('id_inbox')), $this->security->xss_clean($data));
			$error = array("status" => TRUE);
		}
		
		echo json_encode($error);
	}

	public function ajax_delete($id)
	{
		$person = $this->m_inbox->get_by_id($id);		
		$this->m_inbox->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('jawab') == '')
		{
			$data['inputerror'][] = 'jawab';
			$data['error_string'][] = 'Pertanyaan harus dijawab';
			$data['status'] = FALSE;
		}
		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}

	private function kirim_email($data)
	{
		$config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'unikomitsc@gmail.com',
            'smtp_pass' => 'Hardware4409',
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'wordwrap'  => TRUE
		);
		$message = $this->load->view('template', $data, TRUE);
		$this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from('unikomitsc@gmail.com', 'ITSC UNIKOM');
        $this->email->to($data['email']);
        $this->email->subject($data['subject']);
        $this->email->message($message);
        if($this->email->send()){
        	return true;
        }else{
        	return false;
        }	
	}
}
