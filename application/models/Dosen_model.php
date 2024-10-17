<?php 

/**
 * summary
 */
class Dosen_model extends CI_Model{
	public function getAllDosen()
{
		// //menggunakan cara pertama
		// $query = $this->db->get('Dosen');
		// return &query->result_array();
		// menggunakan cara cepat methode chaining // pemanggilan database
	return $this->db->get('dosen')->result_array();

	}

	public function tambahDataDosen()
	{
		$data =[
			"NIP" =>$this->input->post('NIP',true),
			"NamaDosen" =>$this->input->post('NamaDosen',true),
		];
		$this->db->insert('dosen', $data);
	}

	public function getDosenById()
	{
		return $this->db->get_where('dosen',['id'])->row_array();
	}
	
	public function cariDataDosen()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('NIP', $keyword);
		$this->db->or_like('NamaDosen', $keyword);
		return $this->db->get('dosen')->result_array();
	}

	public function ubahDataDosen()
	{
		$data = [
			"NIP" => $this->input->post('NIP', true),
			"NamaDosen" => $this->input->post('NamaDosen', true),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('dosen', $data);
	}

	public function hapusDataDosen($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('dosen');
	}

}

?>