<?php 
/**
* ziong crate 
datetime:2016年5月15日13:35:27
*/
class Home extends CI_Controller
{
	
	
	public function __Home()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'title' =>'mytitle' ,
			'head' =>'myheading',
			'msg' =>'mymsg'
		 );
		$this->session->set_userdata($data);
		$this->load->view('index',$data);

	
		
	}
	public function show()
	{
		var_dump($this->session->userdata());
	}
}
 ?>