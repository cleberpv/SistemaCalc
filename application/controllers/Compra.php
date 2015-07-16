<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compra extends CI_Controller {
	
	function __construct()
	{
	
	parent::__construct();
	$this->data['titulo'] = "Tela de Compras";
	
	}
	public function index()
	{
		$this->load->view('compra');
				
	}
}
