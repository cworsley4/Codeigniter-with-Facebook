<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index(){
		if($this->Facebook_model->isLoggedIn()) {
			echo $this->Facebook_model->getLogoutUrl('home');
		} else {
			echo "NOT LOGGED IN!";
			//echo $this->Facebook_model->getFacebook()->clea();
		} 
	}
	
	public function logout() {
		$this->Facebook_model->logout();
		redirect('/home');
	}

}