<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public $userData = NULL;

	public function __construct() {
          parent::__construct();

		$this->load->library('session');
		$this->userData = $this->session->userdata("user");
		if ($this->userData == NULL)
            redirect("/login");
        
		$this->load->model('login_model');
        $this->load->model('airdrop_user_model');
        
        $this->load->helper('form');
        $this->load->helper('alert');
		$this->load->helper('language');
        $this->load->helper('campaign');
        
        $this->load->database('default');
    }

    public function index(){
        $this->blade->render('client.settings', array("userdata" => $this->userData));
	}

	public function change_password(){
		$data['oldpassword'] = $this->input->post('oldpassword', TRUE);
		$data['password'] = $this->input->post('password', TRUE);
		$data['repassword'] = $this->input->post('repassword', TRUE);
		if($data['password'] != $data['repassword']){
			set_message('error', "Retyped password dosen't match. Please enter same password");
			redirect('/settings');
		}
		$result = $this->airdrop_user_model->check_oldpassword($data['oldpassword']);
		if(!$result){
			set_message('error', "Current password is not correct.");
			redirect('/settings');
		}
		$this->airdrop_user_model->update_password($data['password']);
		set_message('success', "Successfully changed!");
		redirect('/settings');
    }
}
