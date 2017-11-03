<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$this->load->view('template/header');
		$this->load->view('template/navigasi');
		$this->load->view('template/sidebar');
		$this->load->view('template/content');
		$this->load->view('template/footer');

	}
}
?>