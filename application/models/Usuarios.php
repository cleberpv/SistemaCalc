<?php

class Usuarios extends CI_MODEL{

	private $table_name = 'usuarios';

	public $nome;
	public $login;
	public $senha;
	public $status;

	function __construct()
	{
		parent::__construct();
	}

	function get_all()
	{
		$query = $this->db->get( $this->getTable_name() );
		return $query->result();
	}
	function getTable_name()
	{
		return $this->table_name;
	}
}