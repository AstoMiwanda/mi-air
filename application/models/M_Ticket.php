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
	    while ($i <= 8) {
	    	$num = rand() % 33;
	        $tmp = substr($chars, $num, 1);
	        $pass = $pass . $tmp;
	        $i++;
	    }
	    return $pass;
	}

	public function getTicket($limit, $start=0)
	{
		// $this->db->order_by('id', 'desc');
		// $this->db->limit(2, $start);

		$query = "SELECT * , `trute`.`id` AS `id_rute`, `ttransportation`.`description` AS `description_transportation`, `ttransportation_type`.`description` AS `description_transportation_type`
        FROM `trute`
        LEFT JOIN `ttransportation` AS `ttransportation`
        ON `trute`.`transportationid`=`ttransportation`.`id`
        LEFT JOIN `ttransportation_type` AS `ttransportation_type`
		ON `ttransportation`.`id` = `ttransportation_type`.`id` ORDER BY `id_rute` DESC LIMIT $start,$limit";
		
		return $this->db->query($query)->result();
	}

	public function getReservation($id)
	{
		$query = "SELECT *,`trute`.`id` AS `id_rute`, `ttransportation`.`description` AS `description_transportation`, `ttransportation_type`.`description` AS `description_transportation_type`
        FROM `trute`
        LEFT JOIN `ttransportation` AS `ttransportation`
        ON `trute`.`transportationid`=`ttransportation`.`id`
        LEFT JOIN `ttransportation_type` AS `ttransportation_type`
		ON `ttransportation`.`id` = `ttransportation_type`.`id` WHERE `trute`.`id` = $id";

		return $this->db->query($query);
	}

	function data($number,$offset){
		return $query = $this->db->get('trute',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('trute')->num_rows();
	}
}