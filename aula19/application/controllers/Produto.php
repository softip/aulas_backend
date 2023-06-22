<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

	public function index()
	{
	    $crud = new Grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('produto');
		$output = $crud->render();
		$this->load->view('crud', $output);
	}

	public function teste(){
		echo "Testando o CI";
	}


}
