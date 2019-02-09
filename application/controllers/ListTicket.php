<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListTicket extends CI_Controller {

    function __construct()
	{
        parent::__construct();
        $this->load->model('M_Ticket');
    }
    
	public function index()
    {
        $query = "SELECT * , `ttransportation`.`description` AS `desdescription_transportation`, `ttransportation_type`.`description` AS `description_transportation_type`
        FROM `trute`
        LEFT JOIN `ttransportation` AS `ttransportation`
        ON `trute`.`transportationid`=`ttransportation`.`id`
        LEFT JOIN `ttransportation_type` AS `ttransportation_type`
        ON `ttransportation`.`id` = `ttransportation_type`.`id`"; 
        $data_ticket['data_ticket'] =   $this->db->query($query);
        $this->load->view('listTicket', $data_ticket);
    }
}
