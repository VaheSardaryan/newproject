<?php
class Users_model extends CI_Model
{

    public function getinfo($id)
    {

        //$this->load->database(); ete autoloadneri mej chka array ('database', ...) urem amen angamload piti anenq clasi mej
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id',$id);
        // SELECT * FROM users.
        $query = $this->db->get();  //ashxatacnuma queryin
        //return $query->result_array(); // codeigniteri funccia vor@ vercnuma asocativ masiv
        return $query->row(); // ete konkret mi hatikinna petk row(0 ov piti anenq
    }
    public function checkUserInfo($email,$password)
    {

        //$this->load->database(); ete autoloadneri mej chka array ('database', ...) urem amen angamload piti anenq clasi mej
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        // SELECT * FROM users.
        $query = $this->db->get();  //ashxatacnuma queryin
        //return $query->result_array(); // codeigniteri funccia vor@ vercnuma asocativ masiv
        return $query->row(); // ete konkret mi hatikinna petk row(0 ov piti anenq
    }
}