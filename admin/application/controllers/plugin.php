<?php
/**
 * 插件
 *
 *
 */
class Plugin extends CI_Controller
{
	function __construct()
    {
        parent::__construct();  
		if (!$this->session->userdata('logged_in')){          		
			redirect('login');
			exit();
		}
    }

	function index()
    {
		$data = array();
		$this->load->view('_dashboard',$data);
	}
}