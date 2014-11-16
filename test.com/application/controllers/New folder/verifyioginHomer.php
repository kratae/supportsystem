<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLoginHome extends CI_Controller 
{

	 function __construct()
	 {
	   parent::__construct();
	   $this->load->model('LoginModel','',TRUE);
	 }

	 function index()
	 {
		
	 
			 //Go to private area
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			var_dump($_POST);
		   //query the database
		   $result = $this->LoginModel->login($username, $password);

		   if($result)
		   {
				$sess_array = array(
				 'memberid' => $result->memberid,
				 'memberusername' => $result->memberusername,
				 'membername' => $result->membername,
				 'memberlname' => $result->memberlname,
				 'memberstatus' => $result->memberstatus
			   );
			  // var_dump('result');
			  // die();
			   $this->session->set_userdata($sess_array);
			
				if($result->memberstatus == 'Owner')
				{
					 header( "location: ".base_url()."index.php/EmployeeCon" );
				}
				else if($result->memberstatus == 'Employee')
				{
					 header( "location: ".base_url()."index.php/CustomerCon" );
				}
			
				 return TRUE;
		   }
		  
	   
	}
}
?>
