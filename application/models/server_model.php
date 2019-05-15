<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class server_model extends CI_Model
{

    public function get_server(){
		   $query = $this->db->get("tb_mhs");
        return $query->result();
	}

}