<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function run_check_login() 
{
	$status = check_status();
	// echo "<script>console.log('StatusLogin: ".$status."')</script>";
	if(!$status){
		redirect('f-admin/login');
	}
}

function check_status()
{
	// setSession(); //FOR DEVELOPMENT ONLY
	$log_status = FALSE;
	if(isset($_SESSION['username']) && isset($_SESSION['logged_in'])) {
	    if($_SESSION['logged_in'] == TRUE) {
	        $log_status = TRUE;
	    }
	}
	return $log_status;
}

function setSession() //FOR DEVELOPMENT ONLY
{
	$_SESSION['username'] = "TESTER";
	$_SESSION['logged_in'] = TRUE;
}


/* End of file check_login_helper.php */
/* Location: ./application/helpers/check_login_helper.php */
