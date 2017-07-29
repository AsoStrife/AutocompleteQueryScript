<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view('welcome_message');
	}

	
	public function getCity(){
		// Load database library
		$this->load->database();	

		// Get the text typed on textbox
		$keyword = $this->input->post('keyword');

		// Run a query to get cities. In large project better use a specific Model
		$data = $this->db->select('id, city')
						->from('cities')
						->like('city', $keyword, 'after')
						->order_by('city')
						->get()
						->result();

		// Print json data
		if($data)
			echo json_encode($data);
		else
			echo json_encode(array());
	}

}
