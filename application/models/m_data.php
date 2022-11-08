<?php

class M_data extends CI_Model {
    private $_table = "biodata";

    public $nama;
    public $jk;
    public $alamat;
    public $pekerjaan;

    function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'jenis_kelamin',
            'label' => 'jenis_kelamin',
            'rules' => 'required'],
            
            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],

            ['field' => 'pekerjaan',
            'label' => 'pekerjaan',
            'rules' => 'required']
        ];
    }

    function ambil_data(){
        return $this->db->get('biodata');
    }

    public function delete($id)
    {
        return $this->db->delete('biodata', array("id" => $id));
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->jk = $post["jenis_kelamin"];
        $this->alamat = $post["alamat"];
        $this->pekerjaan = $post["pekerjaan"];
        return $this->db->insert($this->_table, $this);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function update($id)
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->jk = $post["jenis_kelamin"];
        $this->alamat = $post["alamat"];
        $this->pekerjaan = $post["pekerjaan"];
        return $this->db->update($this->_table, $this, array('id' => $id));
    }
}