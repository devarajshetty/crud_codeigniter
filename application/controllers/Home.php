<?php
/**
* 
*/
class Home extends CI_Controller
{
	
	function index()
	{
		$this->load->view('homepage');
	}
	function register()
	{
		$data = array(
        'firstname' => $_POST['fname'],
        'lastname' => $_POST['lname'],
        'username' => $_POST['uname'],
        'email' => $_POST['mail'],
        'pass_word' => $_POST['pwd']
);

		$this->load->model('models');
		$this->models->create($data);
	}
	function readdata()
	{
		$this->load->model('models');
		$read_query=$this->models->read();
		$read_array['value_data']=$read_query;
		// foreach ($read_query as $key => $value) {
		// 	echo $value->email;
		// 			}
		// echo $read_array->email;
		$this->load->view('details', $read_array);


	}
	function modify()
	{
		$data = array(
        'firstname' => $_POST['fname'],
        'lastname' => $_POST['lname'],
        'username' => $_POST['uname'],
        'email' => $_POST['mail'],
        'pass_word' => $_POST['pwd']
);

		$this->load->model('register');
		$this->register->create($data);
	}
}