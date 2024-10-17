<?php


class Login extends CI_Controller
{
	 
	public function index()
	{
		$data['judul'] = 'Halaman Login';
		$this->load->view('Admin/Templates/admin_header', $data);
		$this->load->view('Admin/Login', $data);
		$this->load->view('Admin/Templates/admin_footer');
	}


	public function proses_login()
{
	$email= $this->input->post('email');
	$password= $this->input->post('password');

	$tbl_user = $this->db->get_where('tbl_user', ['email' =>$email])->row_array();
	if($tbl_user){
		if (password_verify($password, $tbl_user['password'])){
			$data = [
				'email' => $tbl_user['email'],
				'password' => $tbl_user['password'],
			];
			$this->session->set_userdata($data);
			redirect('beranda');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
			redirect('login');
		}
	} else {
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Terdaftar</div>');
		redirect('login');
	}
}
public function logout()
{
	$this->session->unset_userdata('email');
	$this->session->unset_userdata('password');
	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan Login Kembali</div>');
	redirect('login');
}
}
?>