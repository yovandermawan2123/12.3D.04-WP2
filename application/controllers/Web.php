<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
		$this->load->model('m_data');
		$this->load->library('form_validation');
    }



	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data["Judul"] = "Halaman Judul"; 
		// $data["Name"] = "Yovan D"; 
		// var_dump($data["Kampus"]);die();
		$this->load->view('v_index', $data);
	}

	public function about()
	{
		$data['judul'] = "Halaman About";
		$this->load->view('v_header', $data);
		$this->load->view('v_about', $data);
		$this->load->view('v_footer', $data);

	}

	public function contact()
	{
		$data["meta"] = ["title" => "Contact Us"];
		if ($this->input->method() == 'post') {
			print_r($this->input->post());
		} else {
			$this->load->view('contact', $data);
		} 
		$this->load->view('about', $data);
	}

	public function bio(){
		// $data['bio'] = $this->m_data->ambil_data()->result();
		
		$data = array(
			'judul' => 'Halaman Data',
			'bio' => $this->m_data->ambil_data()->result()
		);
		
		$this->load->view('v_header', $data);
		$this->load->view('v_data', $data);
		$this->load->view('v_footer', $data);
	}
	public function create(){
		// $data['bio'] = $this->m_data->ambil_data()->result();
		
		$data = array(
			'judul' => 'Halaman Data',
			'bio' => $this->m_data->ambil_data()->result()
		);
		
		$this->load->view('v_header', $data);
		$this->load->view('v_create', $data);
		$this->load->view('v_footer', $data);
	}

	public function edit($id){
		// $data['bio'] = $this->m_data->ambil_data()->result();
		
		$data = array(
			'judul' => 'Halaman Data Edit',
			'bio' => $this->m_data->getById($id)
		);
		
		$this->load->view('v_header', $data);
		$this->load->view('v_edit', $data);
		$this->load->view('v_footer', $data);
	}

	public function update($id){
		// $data['bio'] = $this->m_data->ambil_data()->result();
		
		$biodata = $this->m_data;
        $validation = $this->form_validation;
        $validation->set_rules($biodata->rules());

        if ($validation->run()) {
            $biodata->update($id);
			$this->session->set_flashdata('success', 'Berhasil diubah');
        }
		redirect(site_url('/web/bio'));
	}

	public function save(){
		// $data['bio'] = $this->m_data->ambil_data()->result();
		
		// $data = array(
		// 	'judul' => 'Halaman Data',
		// 	'bio' => $this->m_data->ambil_data()->result()
		// );
		$biodata = $this->m_data;
        $validation = $this->form_validation;
        $validation->set_rules($biodata->rules());
		
		// $biodata->save();
		// $this->session->set_flashdata('success', 'Berhasil disimpan');
		// redirect(site_url('/web/bio'));

        if ($validation->run()) {
            $biodata->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
			
        }
		redirect(site_url('/web/bio'));
        // $this->load->view("admin/product/new_form");
		

	
	}

	public function delete($id)
    {
		// print_r($id);die;
       
	
        if (!isset($id)) show_404();
        if ($this->m_data->delete($id)) {
			redirect(site_url('/web/bio'));
		}
        
    }
	// public function parsing()
	// {
		
	// 	$this->load->view('contoh', $data);
	// }
}
