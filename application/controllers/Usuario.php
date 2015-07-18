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
		try{
			$this->data['titulo'] = "Login de acesso ao sistema";
				if(!empty($_POST) && isset($_POST)){
					$this->verifica_login($_POST);
		}

		}catch(Exception $e){
			$this->data['error'] = $e->getMessageError();

		}
		
		
			$this->load->view('login', $this->data);

	}
	
	public function verifica_login($data)
	{
		try{
			$this->load->model('usuarios');
			$usuario = new Usuarios();

			$this->usuarios = $usuario->get_all();
				/*echo '<pre>';
				var_dump($this->usuarios);*/
		
			$this->load->view('usuario', $this->data);
		}catch (Exception $e) {
			throw new Exception($e->getMessageError(),"#101");
		}
	}
}

