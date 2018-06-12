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

		
		if(isset($_POST['update']))
		{
			$data = array(
        'firstname' => $_POST['fname'],
        'lastname' => $_POST['lname'],
        'username' => $_POST['uname'],
        'email' => $_POST['mail'],
        'pass_word' => $_POST['pwd']
);
// 			$this->db->where('id', $_POST['id']);
// 			$this->db->update('MyGuests', $data);
// 			redirect("home/readdata", "refresh");
			$this->load->model('models');
			$this->models->update($data, $_POST['id']);
		}
		if(isset($_POST['delete']))
		{
			$this->load->model('models');
			$this->models->delete($_POST['id']);
			$this->db->where('id', $_POST['id']);
			$this->db->delete('mytable');
			redirect("home/readdata", "refresh");
		}


		// $this->load->model('register');
		// $this->register->create($data);
	}
}