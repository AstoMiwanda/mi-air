<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailTicket extends CI_Controller
{
    function __construct()
	{
        parent::__construct();
        $this->load->model('M_Ticket');
        $this->load->library('pagination');
    }
    
    public function seat_num()
    {
        $seat_num = 0;
        $seat_num++;
        return $seat_num;
    }
    public function index()
    {
        if (isset($_GET['id'])) {
            $id=$_GET['id'];
            $data = array('detail_ticket' => $this->M_Ticket->getReservation($id),
                        'kode_booking' => $this->M_Ticket->KodeGenerate() );
            $this->load->view('detailTicket', $data);
        }else {
            // $seat_num = self::seat_num();
            // echo $seat_num;
            redirect(base_url('ListTicket'));
        }
    }
}
