<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carro extends CI_Controller {

	function __construct()
	{
	
	parent::__construct();
	$this->data['titulo'] = "Carrinho";
	
	}
	public function index()
	{
		$this->load->view('carro');
				
	}
}
