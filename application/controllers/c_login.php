<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_login extends CI_Controller {
	public function __construct(){
        parent::__construct();
				$this->load->model('m_login');

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
	public function index(){
		$this->load->view('v_login');
	}

	public function log(){
			if(isset($_POST['submit'])){
					$query = $this->m_login->validate_user();

					//-- if valid
					if($query){
							$data = array();
							foreach($query as $row){
									$data = array(
											'nip' => $row->nip,
											'nama' => $row->nama,
											'jk' =>$row->jenis_kelamin,
											'alamat' =>$row->alamat,
											'ttl' =>$row->tgl_lahir,
											'role' =>$row->role,
											'is_login' => TRUE
									);
									$this->session->set_userdata($data);
									if ($data['role'] == 'Dosen' || $data['role'] == 'Karyawan') {
										// $url = base_url('dashboard');
										redirect('c_profil');
									} else {
										// $url = base_url('kelolaUser');
										redirect('c_tambahUser');
									}

							}
							// echo json_encode(array('st'=>1,'url'=> $url)); //--success
					}else{
							// echo json_encode(array('st'=>0)); //-- error
							$data = array();
							$data['page'] = 'salah';
							$this->load->view('v_login',$data);
					}

			}
	}



	public function logout(){
			$this->session->sess_destroy();
			$data = array();
			$data['page'] = 'logout';
			$this->load->view('v_login', $data);
	}

}
