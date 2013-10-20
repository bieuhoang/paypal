
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('user');
	}
	
	function index() {
		$this->load->helper('form');
		if ($this->session->userdata('logged_in') != null) {
			redirect('manager');
		}
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">','</div>');
		$this->form_validation->set_rules('username','username','required|callback_checkusername');
		$this->form_validation->set_rules('password','password','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->login($username, $password);
		}
	}
	
	function login($username, $password) {
		$result = $this->user->login($username, $password);
		if($result) {
			$sess_array = array();
			foreach($result as $row) {
				$sess_array = array(
					'id' => $row->id,
					'username' => $row->username );
				$this->session->set_userdata('logged_in', $sess_array);
			}
			redirect('manager');
		} else {
			echo "Invalid username or password !";
			$this->load->view('login');
		}
	}
	
	function checkusername($username) {
		if ($username == 'xxx') {
			$this->form_validation->set_message('checkusername', '%s existed.');
			return false;
		} else {
			return true;
		}
	}
	
	function logout() {
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('login');
	}
}
?>
