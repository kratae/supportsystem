<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
function __construct()
	{		
		parent::__construct();
	if(preg_match('/android|blackberry|ipad|iphone|ipod/i', $_SERVER['HTTP_USER_AGENT'])){
		header("location:".base_url()."index.php/loginMobile");
		exit;
	}else
	{
		header("location:".base_url()."index.php/loginHome");
		exit;
		}
	}


}

