<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Facebook_model extends CI_Model {

	public function __construct() {
		$facebook = $this->load->config('facebook');
		$this->load->library('facebook', $facebook);
		
		// Check if logged in
		//$this->Facebook_model->
	}
	
	public function getFacebook() {
		return $this->facebook;
	}
	
	public function logout() {
		$this->facebook->destroySession();
	}
	
	public function isLoggedIn() {
		$user = $this->getFacebookUser();
		if($user){
			return true;
		} else {
			return false;
		}
	}
	
	public function getFacebookUser() {
		return $this->facebook->getUser();
	}

	public function getMe() {
		// Get the current users data
		return $this->facebook->api('/me');
	}
	
	public function getLogoutUrl() {
		$url = base_url('index.php/account/logout');
		// Get the logout URL if they aren't logged in
		return "<a href='" . $this->facebook->getLogoutUrl(
								array(
									'next' => $url
								)) . "'>Logout</a>";
	}
	
	public function getLoginUrl() {
		// Get the logout URL if they aren't logged in
		return $this->facebook->getLoginUrl();
	}

}