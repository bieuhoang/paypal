<?php
class manager extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        $this->load->helper('url');
 
        $this->output->set_template('default');
    }
 
    public function index()
    {
    	if ($this->session->userdata('logged_in') == null) {
    		redirect('login');
    	}
        $this->load->view('manager');
    }
}
 