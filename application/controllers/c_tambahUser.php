<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_tambahUser extends CI_Controller {
	public function __construct(){
        parent::__construct();
				$this->load->model('m_tambahUser');

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
		$this->load->view('v_tambahUser');
	}

	public function addUser($value='')
	{
		if (isset($_POST['submit'])) {
			$nama=$_POST['nama'];
			$nip=$_POST['nip'];
			$jk=$_POST['jk'];
			$alamat=$_POST['alamat'];
			$ttl=$_POST['ttl'];
			$role=$_POST['role'];
			$password=md5($_POST['password']);
		}

		$db_data = array(
			'nama' => $nama,
			'nip' => $nip,
			'jk' => $jk,
			'alamat' => $alamat,
			'ttl' => $ttl,
			'role' => $role,
			'password' => $password
		);

		$check = $this->m_tambahUser->checkNIP($db_data);
		foreach ($check as $value) {
			$cek = $value['jmlh'];
		}
		if ($cek == 1) {
			$data = array();
			$data ['alert'] = "ada";
			$this->load->view('v_tambahUser', $data);
		} else {
			$this->m_tambahUser->insertUser($db_data);
			$data = array();
			$data ['alert'] = "tidak ada";
			$this->load->view('v_tambahUser', $data);
		}

	}
}
