<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListTicket extends CI_Controller {

    function __construct()
	{
		parent::__construct();
    }
    
	public function index()
    {
        $this->load->view('listTiket');
    }
}
