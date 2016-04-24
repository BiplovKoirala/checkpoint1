<?php
class User_model extends CI_Model
{
    function __construct()
    {

        parent::__construct();
    }
    

    function insertUser($data)
    {
        return $this->db->insert('user', $data);
    }
    

    public function viewdata()
    {
        $query= $this->db->get('user');
        return $query->result();
    }
    public function getonerow($id)
    {
        $this->db->where('id',$id);
        $query=$this->db->get('user');
        return $query->row();
    }
}
?>