<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_mahasiswa extends CI_Controller {
	public function __construct(){
        parent::__construct();
				$this->load->model('m_mahasiswa');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$dropdown_matkul = $this->session->userdata('nip');
		$data = array();
		$data['d_matkul'] = $this->m_mahasiswa->getDropdownMhs($dropdown_matkul);
		$this->load->view('v_mahasiswa', $data);
	}

	public function dropdownKelas()
	{
		if ($this->input->post('id_matkul')) {
			$nip = $this->session->userdata('nip');
			$id_mat = $this->input->post('id_matkul');
			$db_data = array(
				"nip" => $nip,
				"id_matkul" => $id_mat
			);
			echo $this->m_mahasiswa->getDropdownKls($db_data);
		}
	}

	public function daftarMahasiswa()
	{
		if (isset($_POST['submit'])) {
				$db_data = array(
					"id_matkul" => $_POST['matkul'],
					"id_kelas" => $_POST['kelas'],
					"nip"	=> $this->session->userdata('nip')
				);

				$data = array();
				$dropdown_matkul = $this->session->userdata('nip');
				$data['d_matkul'] = $this->m_mahasiswa->getDropdownMhs($dropdown_matkul);
				$data['daftar_mhs'] = $this->m_mahasiswa->getDaftarMhs($db_data);
				$this->load->view('v_mahasiswa', $data);
		}
	}

}
