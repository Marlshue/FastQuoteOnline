<?php

class Site Extends CI_Controller {


	function index(){

		$this->load->view('index');
	}

	function agent_portal(){

		$this->load->view('agent_portal.php');
	}


}

?>