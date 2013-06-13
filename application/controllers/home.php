<?php
class Home extends CI_Controller {

	public function inicio(){
		$this->load->helper('url');  
		$data['title'] = 'Home';
		$this->load->view('index.php',$data);
	}

}
?>