<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inicio extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$user = $_POST['user'];
		$pwd = md5($_POST['pwd']);
		if ($this->modelLogin->login($user, $pwd) == true) {
			$this->load->view('paciente');
		} else {
			echo ":/";
		}	

	}
}
