<?php 
 
 
class CrudShelter extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_datashelter');
		$this->load->helper('url');
 
	}
 
	function index(){
		$this->load->view('template/header');
		$this->load->view('template/navigasi');
		$this->load->view('template/sidebar');
		$this->load->view('template/footer');
		$data['shelter'] = $this->m_datashelter->tampil_data()->result();
		$this->load->view('v_tampilshelter',$data);
	}
 
	function tambah(){
		$this->load->view('v_inputshelter');
	}
 
	function tambah_aksi(){
		$id_shelter = $this->input->post('id_shelter');
		$username = $this->input->post('username');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$password = $this->input->post('password');
		$alamat = $this->input->post('alamat');
		$jumlah_makshewan = $this->input->post('jumlah_makshewan');
		$deskripsi = $this->input->post('deskripsi');

 
		$data = array(
			'id_shelter' => $id_shelter,
			'username' => $username,
			'nama_lengkap' => $nama_lengkap,
			'email' => $email,
			'no_hp' => $no_hp,
			'password' => $password,
			'alamat' => $alamat,
			'jumlah_makshewan' => $jumlah_makshewan,
			'deskripsi' => $deskripsi
			);
		$this->m_datashelter->input_data($data,'shelter');
		redirect('crudshelter/index');
	}
 
	function hapus($id_shelter){
		$where = array('id_shelter' => $id_shelter);
		$this->m_datashelter->hapus_data($where,'shelter');
		redirect('crudsehlter/index');
	}
 
	function edit($id_shelter=FALSE){
		$where = array('id_shelter' => $id_shelter);

		$data['shelter'] = $this->m_datashelter->edit_data($where,'shelter')->result();
		$this->load->view('v_editshelter',$data);
	}
	function update(){
	$id_shelter = $this->input->post('id_shelter');
	$username = $this->input->post('username');
	$nama_lengkap = $this->input->post('nama_lengkap');
	$email = $this->input->post('email');
	$no_hp = $this->input->post('no_hp');
	$password = $this->input->post('password');
	$alamat = $this->input->post('alamat');
	$jumlah_makshewan = $this->input->post('jumlah_makshewan');
	$deskripsi = $this->input->post('deskripsi');
 
	$data = array(
		'id_shelter' => $id_shelter,
			'username' => $username,
			'nama_lengkap' => $nama_lengkap,
			'email' => $email,
			'no_hp' => $no_hp,
			'password' => $password,
			'alamat' => $alamat,
			'jumlah_makshewan' => $jumlah_makshewan,
			'deskripsi' => $deskripsi
	);
 
	$where = array(
		'id_shelter' => $id_shelter
	);
 
	$this->m_datashelter->update_data($where,$data,'shelter');
	redirect('crudsehlter/index');
}
 
}