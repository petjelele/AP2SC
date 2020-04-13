<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_galery');
	}

	public function ajax_list()
	{

		$list = $this->m_galery->get_datatables();
		$data = array();
		$numbring = 1;
		$no = $_POST['start'];
		foreach ($list as $galery) {
			$no++;
			$row = array();
			$row[] = $numbring++;
			if($galery->photo_gal)
				$row[] = '<a href="'.base_url('./assets/img/galery/'.$galery->photo_gal).'" target="_blank"><img src="'.base_url('./assets/img/galery/'.$galery->photo_gal).'" class="img-responsive" style="width:100px; height: auto;"/></a>';
			else
				$row[] = '(No photo)';
			$row[] = $galery->judul;
			$row[] = $galery->desc;
			switch ($galery->cat) {
				case '1': $row[] = 'Kegiatan'; break;
				case '2': $row[] = 'Pengumuman'; break;
			}
			$row[] = $galery->tgl;


			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_galery('."'".$galery->id_gal."'".')"><i class="glyphicon glyphicon-pencil"></i></a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_galery('."'".$galery->id_gal."'".')"><i class="glyphicon glyphicon-trash"></i></a>';

			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_galery->count_all(),
						"recordsFiltered" => $this->m_galery->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->m_galery->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$this->_validate();
		$data = array(
				'judul' => htmlspecialchars($this->input->post('judul')),
				'desc' => htmlspecialchars($this->input->post('deskripsi')),
				'cat' => htmlspecialchars($this->input->post('cat')),
				'tgl' => date('Y-m-d')
			);

		if(!empty($_FILES['photo_gal']['name']))
		{
			$upload = $this->_do_upload();
			$file = $upload['file_name'];
			$data['photo_gal'] = $file;
		}

		$insert = $this->m_galery->save($this->security->xss_clean($data));

		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->_validate();
		$data = array(
				'judul' => htmlspecialchars($this->input->post('judul')),
				'desc' => htmlspecialchars($this->input->post('deskripsi')),
				'cat' => htmlspecialchars($this->input->post('cat'))
			);

		if($this->input->post('remove_photo')) // if remove photo checked
		{
			if(file_exists('./assets/img/galery/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
				unlink('./assets/img/galery/'.$this->input->post('remove_photo'));
			$data['photo_gal'] = '';
		}

		if(!empty($_FILES['photo_gal']['name']))
		{
			$upload = $this->_do_upload();
			$file = $upload['file_name'];
			$person = $this->m_galery->get_by_id($this->input->post('id_gal'));
			if(file_exists('./assets/img/galery/'.$person->photo_gal) && $person->photo_gal)
				unlink('./assets/img/galery/'.$person->photo_gal);

			$data['photo_gal'] = $file;
		}

		$this->m_galery->update(array('id_gal' => $this->input->post('id_gal')), $this->security->xss_clean($data));
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$person = $this->m_galery->get_by_id($id);
		if(file_exists('./assets/img/galery/'.$person->photo_gal) && $person->photo_gal)
			unlink('./assets/img/galery/'.$person->photo_gal);
		
		$this->m_galery->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	private function _do_upload()
	{
		$config['upload_path']          = './assets/img/galery/';
        $config['allowed_types']        = 'jpg|png|JPG';
        $config['max_size']             = 2048; //set max size allowed in Kilobyte
        $config['max_width']            = 1000; // set max width image allowed
        $config['max_height']           = 1000; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('photo_gal')) //upload and validate
        {
            $data['inputerror'][] = 'photo_gal';
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
		if($this->input->post('cat') == '')
		{
			$data['inputerror'][] = 'cat';
			$data['error_string'][] = 'Kategori harus diisi';
			$data['status'] = FALSE;
		}
		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}
}
