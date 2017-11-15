<?php 

//if (!defined('BASEPATH'))
 //   exit('No direct script access allowed');
/**
* 
*/
class Pustu extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Pustu_model');
	}

	function index()
	{
		if(!$this->session->userdata('logined1') || $this->session->userdata('logined1') != true)
		{
			redirect('/Login_pustu');
		}

		$id=$this->session->userdata('id_login');
		$data1['obat']=$this->Pustu_model->ambil_data_idlogin($id);

		$this->load->view('List_obat',$data1);
 	}
 	
function update_1($id){
		$obat=$this->Pustu_model->ambil_data_id($id);
		$data=array(
			'update_aksi_1' => site_url('Pustu/update_aksi_1'),
				'regis_obat' => set_value('regis_obat',$obat->regis_obat),
			'id_pustu' => set_value('id_pustu',$obat->id_pustu),
			'jumlah_stok' => set_value('jumlah_stok',$obat->jumlah_stok),
			'exp_date' => set_value('exp_date',$obat->exp_date),
			'id_stok' => set_value('id_stok',$obat->id_stok),
			'button' => 'Edit' 
			);//Site URL untuk mengarahkan Lokasi berikutnya. set_value untuk menyeting nilainya.
		$this->load->view('pustu/form_update_pustu',$data);
	}
function update_aksi_1()
	{
		$stok=$this->input->post('current_stok');
		$kurang=$this->input->post('kurang_stok');
		$sisa= $stok - $kurang;
$data=array(

			'regis_obat' => $this->input->post('regis_obat'),
			'id_pustu' => $this->input->post('id_pustu'),
			'pengurangan_stok' => $this->input->post('kurang_stok'),
			'sisa_stok' => $sisa
			);
		//$stok=$this->input->post('current_stok');
		//$kurang=$this->input->post('kurang_stok');
		$id_stok=$this->input->post('id_stok');

		$this->Pustu_model->edit_datapustu($id_stok,$sisa,$data);
	redirect(site_url('Pustu/index'));
	}
}
 ?>