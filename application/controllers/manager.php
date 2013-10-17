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
        $this->load->view('manager');
    }
}
 