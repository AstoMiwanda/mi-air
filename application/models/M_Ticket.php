<?php

class M_Ticket extends CI_Model
{
    public function __construct()
	{
		parent::__construct();
		//Load Dependencies

    }

    public function get($table)
    {
        return $this->db->get($table);
    }

    public function where($where, $value)
    {
        return $this->db->where($where, $value);
    }

    public function insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function delete($where, $table, $id)
	{
		$this->db->where($where ,$id);
		return $this->db->delete($table);
	}

	public function update($where, $table, $id, $data)
	{
		$this->db->get($table);
		$this->db->where($where, $id);
		return $this->db->update($table, $data);
	}

    public function KodeGenerate() { 
	    $chars = "023456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
	    srand((double)microtime()*1000000);
	    $i = 0;
	    $pass = '' ;
	    while ($i <= 12) {
	    	$num = rand() % 33;
	        $tmp = substr($chars, $num, 1);
	        $pass = $pass . $tmp;
	        $i++;
	    }
	    return $pass;
	}
}
