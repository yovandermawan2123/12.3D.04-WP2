<?php

class Bio extends CI_Controller {


	public function index()
	{
        // echo "Biodata";
        // echo"<br>";
        // echo "Nama Saya Yovan Dermawan, Bapak bisa panggil saya <strong>Yovan</strong> saya dari program studi Sistem Informasi D3";
		$this->load->view('v_forms_bio');
	}
	public function cetak()
	{

        $data = [
            "nim" => $this->input->post('nim'),
            "nama" => $this->input->post('name'),
            "nim" => $this->input->post('prodi')
        ];

        $this->load->view('view-data-matakuliah', $data);
      
	}
}
