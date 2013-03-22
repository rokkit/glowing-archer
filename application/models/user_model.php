<?php
class user_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function find($user)
	{
		$query = $this->db->where(array('name'=>$user['name'],'password'=>$user['password']))->limit(1,0)->get('user');
		if ($query->num_rows() > 0){
			return $query->row();
		}
		else {
			return FALSE;
		}
	}

	public function create($user)
	{
		$this->db->insert('user', $user);
        return $this->db->where('id',$this->db->insert_id())->get('user')->row();
	}

}