<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelpg extends CI_Model {
	public function getpg(){
     
		$pg = $this->db->get('pg')->result();
        return $pg;
	}
	public function insertpg(){
		$data['code'] = $this->input->post('code');
		$data['name'] = $this->input->post('name');
		$data['status'] = $this->input->post('status');
		$this->db->insert('pg',$data);
	}
}
?>