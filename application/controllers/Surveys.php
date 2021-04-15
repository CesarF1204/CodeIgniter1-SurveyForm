<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surveys extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->view('surveys/index');
	}

	public function process_form(){
		//post
		$name = $this->input->post('name');
		$location = $this->input->post('location');
		$language = $this->input->post('language');
		$comment = $this->input->post('comment');
		//session
		$this->session->set_userdata('name', $name, );
		$this->session->set_userdata('location', $location);
		$this->session->set_userdata('language', $language);
		$this->session->set_userdata('comment', $comment);
		//submit counter
		if($this->input->post('action') == 'processed') {
			$submit = $this->session->userdata('submit');
			$submit++;
			$this->session->set_userdata('submit', $submit);
			echo '<p class="text-center">Thanks for submitting this form! You have submitted this form '.$submit.' time(s) now</p>';
		}
		$this->load->view('surveys/result');
	}
}
