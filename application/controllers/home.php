<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		try {
			//$isLoggedIn = $this->Facebook_model->isLoggedIn();
			//Confirm that there is a user logged into Facebook
			if ($this->Facebook_model->isLoggedIn()) {
				redirect('/account', 'refresh');
			} else {
				$redirect = base_url('account');
				$params = array('redirect' => $redirect);
				$loginUrl = $this->facebook->getLoginUrl($params);
				echo "<a href='" . $loginUrl . "'>You are not logged in!</a>";
			}
		} catch (FacebookApiException $e) {
			print_r($e);
		}
		

	}

}