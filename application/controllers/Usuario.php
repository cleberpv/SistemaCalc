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
			if(!empty($_POST) && isset($_POST))
			{
				if( $this->verifica_login($_POST) )
				{
					$this->load->view('usuario', $this->data);
				}else{
						$this->load->view('login', $this->data);
				}
			}else{
				$this->load->view('login', $this->data);
			}
		}catch(Exception $e){
			$this->data['error'] = $e->getMessage();

		}
	
	}
	/*public function home(){
		$this->load->('login');

	}*/
	
	public function verifica_login($data)
	{
		try{
			$this->load->model('usuarios');
			$usuario = new Usuarios();
			$this->usuarios = $usuario->get_all();
				foreach ($this->usuarios as $key => $value) {
					if($value->login == $data ['userName'])
					{
						return true;

					}
					return false;

				}
		
			$this->load->view('usuario', $this->data);
		}catch (Exception $e) {
			throw new Exception($e->getMessageError(),"#101");
		}
	}
}

