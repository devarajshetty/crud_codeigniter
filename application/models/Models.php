<?php
class Models extends CI_Model{
	function create($data_add){
		$dbinsert=$data_add;
		 $this->db->insert('MyGuests', $dbinsert);
		 // $this->load->view('details');
		 redirect("home/readdata", "refresh");

	}
	function read(){
		$query = $this->db->get('MyGuests');
        return $query->result();
	}
	function update(){
		
	}
	function delete(){
		
	}

}