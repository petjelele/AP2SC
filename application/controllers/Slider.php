<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_slider');
	}

	public function ajax_list()
	{

		$list = $this->m_slider->get_datatables();
		$data = array();
		$numbring = 1;
		$no = $_POST['start'];
		foreach ($list as $slider) {
			$no++;
			$row = array();
			$row[] = $numbring++;
			if($slider->photo_slider)
				$row[] = '<a href="'.base_url('./assets/img/slider/'.$slider->photo_slider).'" target="_blank"><img src="'.base_url('./assets/img/slider/'.$slider->photo_slider).'" class="img-responsive" style="width:200px; height: auto;"/></a>';
			else
				$row[] = '(No photo)';
			$row[] = $slider->judul;
			$row[] = $slider->deskripsi;
			$row[] = $slider->tgl;

			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_slider('."'".$slider->id_slider."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_slider('."'".$slider->id_slider."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_slider->count_all(),
						"recordsFiltered" => $this->m_slider->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->m_slider->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$this->_validate();
		$data = array(
				'judul' => htmlspecialchars($this->input->post('judul')),
				'deskripsi' => htmlspecialchars($this->input->post('deskripsi')),
				'tgl' => date('Y-m-d')
			);

		if(!empty($_FILES['photo_slider']['name']))
		{
			$upload = $this->_do_upload();
			$file = $upload['file_name'];
			$data['photo_slider'] = $file;
		}

		$insert = $this->m_slider->save($this->security->xss_clean($data));

		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->_validate();
		$data = array(
				'judul' => htmlspecialchars($this->input->post('judul')),
				'deskripsi' => htmlspecialchars($this->input->post('deskripsi'))
			);

		if($this->input->post('remove_photo')) // if remove photo checked
		{
			if(file_exists('./assets/img/slider/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
				unlink('./assets/img/slider/'.$this->input->post('remove_photo'));
			$data['photo_slider'] = '';
		}

		if(!empty($_FILES['photo_slider']['name']))
		{
			$upload = $this->_do_upload();
			$file = $upload['file_name'];
			$person = $this->m_slider->get_by_id($this->input->post('id_slider'));
			if(file_exists('./assets/img/slider/'.$person->photo_slider) && $person->photo_slider)
				unlink('./assets/img/slider/'.$person->photo_slider);

			$data['photo_slider'] = $file;
		}

		$this->m_slider->update(array('id_slider' => $this->input->post('id_slider')), $this->security->xss_clean($data));
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$person = $this->m_slider->get_by_id($id);
		if(file_exists('./assets/img/slider/'.$person->photo_slider) && $person->photo_slider)
			unlink('./assets/img/slider/'.$person->photo_slider);
		
		$this->m_slider->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	private function _do_upload()
	{
		$config['upload_path']          = './assets/img/slider/';
        $config['allowed_types']        = 'jpg|png|JPG';
        $config['max_size']             = 2048; //set max size allowed in Kilobyte
        $config['max_width']            = 2048; // set max width image allowed
        $config['max_height']           = 1200; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('photo_slider')) //upload and validate
        {
            $data['inputerror'][] = 'photo_slider';
			$data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
			$data['status'] = FALSE;
			echo json_encode($data);
			exit();
		}
		return $this->upload->data();
	}

	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('judul') == '')
		{
			$data['inputerror'][] = 'judul';
			$data['error_string'][] = 'Judul harus diisi';
			$data['status'] = FALSE;
		}
		if($this->input->post('deskripsi') == '')
		{
			$data['inputerror'][] = 'deskripsi';
			$data['error_string'][] = 'Deskripsi harus diisi';
			$data['status'] = FALSE;
		}
		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}
}
