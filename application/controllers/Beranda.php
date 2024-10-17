<?php

class Beranda extends CI_Controller 
{

	public function index()
	{
	if(empty($this->session->userdata('email'))){
		redirect('login');
	}
	 $data['judul']= 'Halaman Beranda';
	 $this->load->view('Templates/header',$data);
	$this->load->view('Beranda/index',$data);
	$this->load->view('Templates/footer');

	}
}
?>