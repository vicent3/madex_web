<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {



	public function index()
	{
		$this->load->view('inc/head');
		$this->load->view('inc/menu');
		$this->load->view('inicio');
		$this->load->view('inc/footer');
		$this->load->view('inc/pie');
	}
	public function producto()
	{
		$lista = $this->producto_model->listaproducto();
		$data['categorias'] = $lista;
		$this->load->view('inc/head');
		$this->load->view('inc/menu');
		$this->load->view('producto', $data);
		$this->load->view('inc/footer');
		$this->load->view('inc/pie');
	}
	public function carrito()
	{
		$this->load->view('inc/head');
		$this->load->view('inc/menu');	
		$this->load->view('carrito');
		$this->load->view('inc/footer');
		$this->load->view('inc/pie');
	}
	public function acerca()
	{
		$this->load->view('inc/head');
		$this->load->view('inc/menu');
		$this->load->view('acerca');
		$this->load->view('inc/footer');
		$this->load->view('inc/pie');
	}
}