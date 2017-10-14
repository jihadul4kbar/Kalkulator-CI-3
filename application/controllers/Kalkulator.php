<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalkulator extends CI_Controller {
	public function index(){
		$this->load->view('kalkulator/index');
	}

	public function kalkulator(){
		$angka1 = $this->input->post('angka1');
		$angka2 = $this->input->post('angka2');
		$pilih_oprasi = $this->input->post('pilih_oprasi');
	}
}