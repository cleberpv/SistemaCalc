<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['titulo']="Login !";

	}

	public function index()
	{
		$this->data['titulo'] = "Login de acesso ao sistema";
		
		if(isset($_POST)){
			$erro = $this->verifica_login($_POST);
		}
			$this->load->view('login', $this->data);

		}
	
	public function verifica_login($data)
	{
		echo '<pre>';
		var_dump($data);
		$this->load->view('usuario', $this->data);

	}
}

