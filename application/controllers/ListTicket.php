<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListTicket extends CI_Controller {

    function __construct()
	{
        parent::__construct();
        $this->load->model('M_Ticket');
        $this->load->library('pagination');
    }
    
	public function index_b()
    {
        $config['uri_segment'] = 3;
        $config['per_page'] = 2;
        $config['num_rows'] = 200;

        $this->pagination->initialize($config);
        $page = $this->uri->segment(3,1);
        $data['pagination'] = $this->pagination->create_links();

        // $data['ticket'] = $this->M_Ticket->getLimit('trute', $config['per_page'], $page);

        $data['data_ticket'] = $this->M_Ticket->getTicket($config['per_page'], $page);
        echo $this->pagination->create_links();
        $this->load->view('listTicket', $data);
    }

    public function index()
    {
        $this->load->database();
		$jumlah_data = $this->M_Ticket->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'ListTicket/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 2;
        $from = $this->uri->segment(3,0);
        $this->pagination->initialize($config);	
        $data['pagination'] = $this->pagination->create_links();
		$data['data_ticket'] = $this->M_Ticket->getTicket($config['per_page'],$from);
		$this->load->view('listTicket',$data);
    }
}
