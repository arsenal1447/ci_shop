<?php
/**
 * 注销
 *
 *
 */
class Logout extends CI_Controller
{
	function __construct()
    {
        parent::__construct();  
		$this->session->sess_destroy();
		redirect('login');
    }
   
}
?>