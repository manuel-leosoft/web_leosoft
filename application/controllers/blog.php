<?php
class Blog extends CI_Controller {
function index()
{
 echo "HOla mundo!";
}

function home(){
 $this->load->view('home');
}

}
?>