<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{       
        $this->load->helper('url');
        $this->load->library('session');
        # valida si se encuentra la secion activa para entrar a la primera pantalla del sistema 
        if($this->session->userdata('username') == FALSE)
		{
			redirect('auth/login', 'refresh');
		}
	    # carga la primera vista
	    $this->load->view('welcome_message');




	    
	}
}
