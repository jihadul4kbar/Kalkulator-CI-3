<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Depan extends CI_Controller {
	public function index()
	{
		$this->load->view('menu_utama');
	}
}
