<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlleratm extends CI_Controller {
	public function index(){
		$this->load->view('viewatm');
	}
	/*public function addpg(){	
		$this->load->helper('url');
		if(@$_POST){			 
			$this->load->model('modelpg');
			$this->modelpg->insertpg();
	
			redirect(base_url().$this->router->class,'refresh');
		}
		$this->load->view('addpg');
	}*/
}
