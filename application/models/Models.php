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
	function update($up_data, $id_data){
		$update_data=$up_data;
		$id=$id_data;
		
			$this->db->where('id', $id);
			$this->db->update('MyGuests', $update_data);
			redirect("home/readdata", "refresh");

	}
	function delete($id_data){
		$id=$id_data;
		$this->db->where('id', $id);
			$this->db->delete('MyGuests');
			redirect("home/readdata", "refresh");
		
	}

}