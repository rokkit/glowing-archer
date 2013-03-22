<?php
class post_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function clist($id_user)
	{
		$query = $this->db->where(array('id_user'=>$id_user))->get('posts');
		if ($query->num_rows() > 0){
			return $query->result();
		}
		else {
			return FALSE;
		}
	}

	public function create($post,$id_user)
	{
		$post['id_user'] = $id_user;
		$this->db->insert('posts', $post);
        return true;
	}

}