<?php 

/**
 * nama kelas harus sesuai dengan nama file
 */
class Obat extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Obat_model');
	}

	function index()
	{
		if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
		{
			redirect('/');
		}

		$data1['obat']=$this->Obat_model->ambil_data();

		$this->load->view('Utama',$data1);
 	}
function Ambildata_transaksi(){
		$data1['obat']=$this->Obat_model->ambil_datatransaksi();

		$this->load->view('Obat/Datatransaksi',$data1);
 	}


////// TAMBAH DATA OBAT

 	function tambah_data_obat()
	{
		$data=array(
			'aksi_tambah' => site_url('Obat/tambah_data_obat_aksi'),
			'regis_obat' => set_value('regis_obat'),
			'nama_obat' => set_value('nama_obat'),
			'harga_obat' => set_value('harga_obat'),
			'jenis_obat' => set_value('jenis_obat'),
			
			'button' => 'Add' 
			);//Site URL untuk mengarahkan Lokasi berikutnya. set_value untuk menyeting nilainya.
		$this->load->view('Obat/Tambah_data_obat_form',$data);
	}
	function tambah_data_obat_aksi()
	{
		$data=array(

			'regis_obat' => $this->input->post('regis_obat'),
			'nama_obat' => $this->input->post('nama_obat'),
			'jenis_obat' => $this->input->post('jenis_obat'),
			'harga_obat' => $this->input->post('harga_obat')
			);
		$this->Obat_model->tambah_data_daftar_obat($data);
		redirect(site_url('Obat/Daftar_obat'));
	}

public function Daftar_obat(){
		$data1['obat']=$this->Obat_model->ambil_data_obat();
		$this->load->view('Obat/Daftar_obat',$data1);
	}
function hapus($id){
		
		$this->Obat_model->hapus_data_obat($id);
		redirect(site_url('Obat/Daftar_obat'));
	}

///// PUSTU 1

	public function pustu1(){
		$data1['obat']=$this->Obat_model->ambil_data_pustu1();
		$this->load->view('Obat/pustu',$data1);
	}
	function delete_1($id){
		$pustu_id="1";
		$this->Obat_model->hapus_data($id,$pustu_id);
		redirect(site_url('Obat/pustu1'));
	}
	function tambah_1()
	{
		$data=array(
			'aksi_tambah' => site_url('Obat/tambah_aksi_1'),
			'regis_obat' => set_value('regis_obat'),
			'id_pustu' => set_value('id_pustu'),
			'jumlah_stok' => set_value('jumlah_stok'),
			'exp_date' => set_value('exp_date'),
			'id_stok' => set_value('id_stok'),
			'button' => 'Add' 
			);//Site URL untuk mengarahkan Lokasi berikutnya. set_value untuk menyeting nilainya.
		$this->load->view('Obat/obat_form',$data);
	}
	function tambah_aksi_1()
	{
		$data=array(

			'regis_obat' => $this->input->post('regis_obat'),
			'id_pustu' => $this->input->post('id_pustu'),
			'jumlah_stok' => $this->input->post('jumlah_stok'),
			'exp_date' => $this->input->post('exp_date')
			);
		$this->Obat_model->tambah_data_1($data);
		redirect(site_url('Obat/pustu1'));
	}
	function update_1($id){
		$obat=$this->Obat_model->ambil_data_id($id);
		$data=array(
			'update_aksi_1' => site_url('Obat/update_aksi_1'),
				'regis_obat' => set_value('regis_obat',$obat->regis_obat),
			'id_pustu' => set_value('id_pustu',$obat->id_pustu),
			'jumlah_stok' => set_value('jumlah_stok',$obat->jumlah_stok),
			'exp_date' => set_value('exp_date',$obat->exp_date),
			'id_stok' => set_value('id_stok',$obat->id_stok),
			'button' => 'Edit' 
			);//Site URL untuk mengarahkan Lokasi berikutnya. set_value untuk menyeting nilainya.
		$this->load->view('Obat/form_update',$data);
	}
function update_aksi_1()
	{
		$data=array(

			'regis_obat' => $this->input->post('regis_obat'),
			'id_pustu' => $this->input->post('id_pustu'),
			'jumlah_stok' => $this->input->post('jumlah_stok'),
			'exp_date' => $this->input->post('exp_date'),
			'id_stok' => $this->input->post('id_stok'),
			);
		$id_stok=$this->input->post('id_stok');
		$this->Obat_model->edit_data($id_stok,$data);
	redirect(site_url('Obat/pustu1'));
	}


/////////////


	public function pustu2(){
		$data1['obat']=$this->Obat_model->ambil_data_pustu2();
		$this->load->view('Obat/pustu2',$data1);
	}
	function delete_2($id){
		$pustu_id="2";
		$this->Obat_model->hapus_data($id,$pustu_id);
		redirect(site_url('Obat/pustu2'));
	}
	function tambah_2()
	{
		$data=array(
			'aksi_tambah' => site_url('Obat/tambah_aksi_2'),
			'regis_obat' => set_value('regis_obat'),
			'id_pustu' => set_value('id_pustu'),
			'jumlah_stok' => set_value('jumlah_stok'),
			'exp_date' => set_value('exp_date'),
			'id_stok' => set_value('id_stok'),
			'button' => 'Add' 
			);//Site URL untuk mengarahkan Lokasi berikutnya. set_value untuk menyeting nilainya.
		$this->load->view('Obat/obat_form',$data);
	}
	function tambah_aksi_2()
	{
		$data=array(

			'regis_obat' => $this->input->post('regis_obat'),
			'id_pustu' => $this->input->post('id_pustu'),
			'jumlah_stok' => $this->input->post('jumlah_stok'),
			'exp_date' => $this->input->post('exp_date')
			);
		$this->Obat_model->tambah_data_1($data);
		redirect(site_url('Obat/pustu2'));
	}
	function update_2($id){
		$obat=$this->Obat_model->ambil_data_id($id);
		$data=array(
			'update_aksi_1' => site_url('Obat/update_aksi_2'),
				'regis_obat' => set_value('regis_obat',$obat->regis_obat),
			'id_pustu' => set_value('id_pustu',$obat->id_pustu),
			'jumlah_stok' => set_value('jumlah_stok',$obat->jumlah_stok),
			'exp_date' => set_value('exp_date',$obat->exp_date),
			'id_stok' => set_value('id_stok',$obat->id_stok),
			'button' => 'Edit' 
			);//Site URL untuk mengarahkan Lokasi berikutnya. set_value untuk menyeting nilainya.
		$this->load->view('Obat/form_update',$data);
	}
function update_aksi_2()
	{
		$data=array(

			'regis_obat' => $this->input->post('regis_obat'),
			'id_pustu' => $this->input->post('id_pustu'),
			'jumlah_stok' => $this->input->post('jumlah_stok'),
			'exp_date' => $this->input->post('exp_date'),
			'id_stok' => $this->input->post('id_stok'),
			);
		$id_stok=$this->input->post('id_stok');
		$this->Obat_model->edit_data($id_stok,$data);
	redirect(site_url('Obat/pustu2'));
	}

	/////

	public function pustu3(){
		$data1['obat']=$this->Obat_model->ambil_data_pustu3();
		$this->load->view('Obat/pustu3',$data1);
	}
	function delete_3($id){
		$pustu_id="3";
		$this->Obat_model->hapus_data($id,$pustu_id);
		redirect(site_url('Obat/pustu3'));
	}
	function tambah_3()
	{
		$data=array(
			'aksi_tambah' => site_url('Obat/tambah_aksi_3'),
			'regis_obat' => set_value('regis_obat'),
			'id_pustu' => set_value('id_pustu'),
			'jumlah_stok' => set_value('jumlah_stok'),
			'exp_date' => set_value('exp_date'),
			'id_stok' => set_value('id_stok'),
			'button' => 'Add' 
			);//Site URL untuk mengarahkan Lokasi berikutnya. set_value untuk menyeting nilainya.
		$this->load->view('Obat/obat_form',$data);
	}
	function tambah_aksi_3()
	{
		$data=array(

			'regis_obat' => $this->input->post('regis_obat'),
			'id_pustu' => $this->input->post('id_pustu'),
			'jumlah_stok' => $this->input->post('jumlah_stok'),
			'exp_date' => $this->input->post('exp_date')
			);
		$this->Obat_model->tambah_data_1($data);
		redirect(site_url('Obat/pustu3'));
	}
	function update_3($id){
		$obat=$this->Obat_model->ambil_data_id($id);
		$data=array(
			'update_aksi_1' => site_url('Obat/update_aksi_3'),
				'regis_obat' => set_value('regis_obat',$obat->regis_obat),
			'id_pustu' => set_value('id_pustu',$obat->id_pustu),
			'jumlah_stok' => set_value('jumlah_stok',$obat->jumlah_stok),
			'exp_date' => set_value('exp_date',$obat->exp_date),
			'id_stok' => set_value('id_stok',$obat->id_stok),
			'button' => 'Edit' 
			);//Site URL untuk mengarahkan Lokasi berikutnya. set_value untuk menyeting nilainya.
		$this->load->view('Obat/form_update',$data);
	}

function update_aksi_3()
	{
		$data=array(

			'regis_obat' => $this->input->post('regis_obat'),
			'id_pustu' => $this->input->post('id_pustu'),
			'jumlah_stok' => $this->input->post('jumlah_stok'),
			'exp_date' => $this->input->post('exp_date'),
			'id_stok' => $this->input->post('id_stok'),
			);
		$id_stok=$this->input->post('id_stok');
		$this->Obat_model->edit_data($id_stok,$data);
	redirect(site_url('Obat/pustu1'));
	}

	/////
	public function pustu4(){
		$data1['obat']=$this->Obat_model->ambil_data_pustu4();
		$this->load->view('Obat/pustu4',$data1);
	}
	function delete_4($id){
		$pustu_id="4";
		$this->Obat_model->hapus_data($id,$pustu_id);
		redirect(site_url('Obat/pustu4'));
	}
	function tambah_4()
	{
		$data=array(
			'aksi_tambah' => site_url('Obat/tambah_aksi_4'),
			'regis_obat' => set_value('regis_obat'),
			'id_pustu' => set_value('id_pustu'),
			'jumlah_stok' => set_value('jumlah_stok'),
			'exp_date' => set_value('exp_date'),
			'id_stok' => set_value('id_stok'),
			'button' => 'Add' 
			);//Site URL untuk mengarahkan Lokasi berikutnya. set_value untuk menyeting nilainya.
		$this->load->view('Obat/obat_form',$data);
	}
	function tambah_aksi_4()
	{
		$data=array(

			'regis_obat' => $this->input->post('regis_obat'),
			'id_pustu' => $this->input->post('id_pustu'),
			'jumlah_stok' => $this->input->post('jumlah_stok'),
			'exp_date' => $this->input->post('exp_date')
			);
		$this->Obat_model->tambah_data_1($data);
		redirect(site_url('Obat/pustu1'));
	}
	function update_4($id){
		$obat=$this->Obat_model->ambil_data_id($id);
		$data=array(
			'update_aksi_1' => site_url('Obat/update_aksi_4'),
				'regis_obat' => set_value('regis_obat',$obat->regis_obat),
			'id_pustu' => set_value('id_pustu',$obat->id_pustu),
			'jumlah_stok' => set_value('jumlah_stok',$obat->jumlah_stok),
			'exp_date' => set_value('exp_date',$obat->exp_date),
			'id_stok' => set_value('id_stok',$obat->id_stok),
			'button' => 'Edit' 
			);//Site URL untuk mengarahkan Lokasi berikutnya. set_value untuk menyeting nilainya.
		$this->load->view('Obat/form_update',$data);
	}
function update_aksi_4()
	{
		$data=array(

			'regis_obat' => $this->input->post('regis_obat'),
			'id_pustu' => $this->input->post('id_pustu'),
			'jumlah_stok' => $this->input->post('jumlah_stok'),
			'exp_date' => $this->input->post('exp_date'),
			'id_stok' => $this->input->post('id_stok'),
			);
		$id_stok=$this->input->post('id_stok');
		$this->Obat_model->edit_data($id_stok,$data);
	redirect(site_url('Obat/pustu4'));
	}
	//////////
	public function pustu5(){
		$data1['obat']=$this->Obat_model->ambil_data_pustu5();
		$this->load->view('Obat/pustu5',$data1);
	}
	function delete_5($id){
		$pustu_id="5";
		$this->Obat_model->hapus_data($id,$pustu_id);
		redirect(site_url('Obat/pustu5'));
	}
	function tambah_5()
	{
		$data=array(
			'aksi_tambah' => site_url('Obat/tambah_aksi_5'),
			'regis_obat' => set_value('regis_obat'),
			'id_pustu' => set_value('id_pustu'),
			'jumlah_stok' => set_value('jumlah_stok'),
			'exp_date' => set_value('exp_date'),
			'id_stok' => set_value('id_stok'),
			'button' => 'Add' 
			);//Site URL untuk mengarahkan Lokasi berikutnya. set_value untuk menyeting nilainya.
		$this->load->view('Obat/obat_form',$data);
	}
	function tambah_aksi_5()
	{
		$data=array(

			'regis_obat' => $this->input->post('regis_obat'),
			'id_pustu' => $this->input->post('id_pustu'),
			'jumlah_stok' => $this->input->post('jumlah_stok'),
			'exp_date' => $this->input->post('exp_date')
			);
		$this->Obat_model->tambah_data_1($data);
		redirect(site_url('Obat/pustu5'));
	}
	function update_5($id){
		$obat=$this->Obat_model->ambil_data_id($id);
		$data=array(
			'update_aksi_1' => site_url('Obat/update_aksi_5'),
				'regis_obat' => set_value('regis_obat',$obat->regis_obat),
			'id_pustu' => set_value('id_pustu',$obat->id_pustu),
			'jumlah_stok' => set_value('jumlah_stok',$obat->jumlah_stok),
			'exp_date' => set_value('exp_date',$obat->exp_date),
			'id_stok' => set_value('id_stok',$obat->id_stok),
			'button' => 'Edit' 
			);//Site URL untuk mengarahkan Lokasi berikutnya. set_value untuk menyeting nilainya.
		$this->load->view('Obat/form_update',$data);
	}
function update_aksi_5()
	{
		$data=array(

			'regis_obat' => $this->input->post('regis_obat'),
			'id_pustu' => $this->input->post('id_pustu'),
			'jumlah_stok' => $this->input->post('jumlah_stok'),
			'exp_date' => $this->input->post('exp_date'),
			'id_stok' => $this->input->post('id_stok'),
			);
		$id_stok=$this->input->post('id_stok');
		$this->Obat_model->edit_data($id_stok,$data);
	redirect(site_url('Obat/pustu5'));
	}
	////////////
	public function pustu6(){
		$data1['obat']=$this->Obat_model->ambil_data_pustu6();
		$this->load->view('Obat/pustu6',$data1);
	}
	function delete_6($id){
		$pustu_id="6";
		$this->Obat_model->hapus_data($id,$pustu_id);
		redirect(site_url('Obat/pustu6'));
	}
	function tambah_6()
	{
		$data=array(
			'aksi_tambah' => site_url('Obat/tambah_aksi_6'),
			'regis_obat' => set_value('regis_obat'),
			'id_pustu' => set_value('id_pustu'),
			'jumlah_stok' => set_value('jumlah_stok'),
			'exp_date' => set_value('exp_date'),
			'id_stok' => set_value('id_stok'),
			'button' => 'Add' 
			);//Site URL untuk mengarahkan Lokasi berikutnya. set_value untuk menyeting nilainya.
		$this->load->view('Obat/obat_form',$data);
	}
	function tambah_aksi_6()
	{
		$data=array(

			'regis_obat' => $this->input->post('regis_obat'),
			'id_pustu' => $this->input->post('id_pustu'),
			'jumlah_stok' => $this->input->post('jumlah_stok'),
			'exp_date' => $this->input->post('exp_date')
			);
		$this->Obat_model->tambah_data_1($data);
		redirect(site_url('Obat/pustu5'));
	}
	function update_6($id){
		$obat=$this->Obat_model->ambil_data_id($id);
		$data=array(
			'update_aksi_1' => site_url('Obat/update_aksi_6'),
				'regis_obat' => set_value('regis_obat',$obat->regis_obat),
			'id_pustu' => set_value('id_pustu',$obat->id_pustu),
			'jumlah_stok' => set_value('jumlah_stok',$obat->jumlah_stok),
			'exp_date' => set_value('exp_date',$obat->exp_date),
			'id_stok' => set_value('id_stok',$obat->id_stok),
			'button' => 'Edit' 
			);//Site URL untuk mengarahkan Lokasi berikutnya. set_value untuk menyeting nilainya.
		$this->load->view('Obat/form_update',$data);
	}
function update_aksi_6()
	{
		$data=array(

			'regis_obat' => $this->input->post('regis_obat'),
			'id_pustu' => $this->input->post('id_pustu'),
			'jumlah_stok' => $this->input->post('jumlah_stok'),
			'exp_date' => $this->input->post('exp_date'),
			'id_stok' => $this->input->post('id_stok'),
			);
		$id_stok=$this->input->post('id_stok');
		$this->Obat_model->edit_data($id_stok,$data);
	redirect(site_url('Obat/pustu6'));
	}
	/////
	public function pustu7(){
		$data1['obat']=$this->Obat_model->ambil_data_pustu7();
		$this->load->view('Obat/pustu7',$data1);
	}
	function delete_7($id){
		$pustu_id="7";
		$this->Obat_model->hapus_data($id,$pustu_id);
		redirect(site_url('Obat/pustu7'));
	}
	function tambah_7()
	{
		$data=array(
			'aksi_tambah' => site_url('Obat/tambah_aksi_7'),
			'regis_obat' => set_value('regis_obat'),
			'id_pustu' => set_value('id_pustu'),
			'jumlah_stok' => set_value('jumlah_stok'),
			'exp_date' => set_value('exp_date'),
			'id_stok' => set_value('id_stok'),
			'button' => 'Add' 
			);//Site URL untuk mengarahkan Lokasi berikutnya. set_value untuk menyeting nilainya.
		$this->load->view('Obat/obat_form',$data);
	}
	function tambah_aksi_7()
	{
		$data=array(

			'regis_obat' => $this->input->post('regis_obat'),
			'id_pustu' => $this->input->post('id_pustu'),
			'jumlah_stok' => $this->input->post('jumlah_stok'),
			'exp_date' => $this->input->post('exp_date')
			);
		$this->Obat_model->tambah_data_1($data);
		redirect(site_url('Obat/pustu7'));
	}
	function update_7($id){
		$obat=$this->Obat_model->ambil_data_id($id);
		$data=array(
			'update_aksi_1' => site_url('Obat/update_aksi_7'),
				'regis_obat' => set_value('regis_obat',$obat->regis_obat),
			'id_pustu' => set_value('id_pustu',$obat->id_pustu),
			'jumlah_stok' => set_value('jumlah_stok',$obat->jumlah_stok),
			'exp_date' => set_value('exp_date',$obat->exp_date),
			'id_stok' => set_value('id_stok',$obat->id_stok),
			'button' => 'Edit' 
			);//Site URL untuk mengarahkan Lokasi berikutnya. set_value untuk menyeting nilainya.
		$this->load->view('Obat/form_update',$data);
	}
function update_aksi_7()
	{
		$data=array(

			'regis_obat' => $this->input->post('regis_obat'),
			'id_pustu' => $this->input->post('id_pustu'),
			'jumlah_stok' => $this->input->post('jumlah_stok'),
			'exp_date' => $this->input->post('exp_date'),
			'id_stok' => $this->input->post('id_stok'),
			);
		$id_stok=$this->input->post('id_stok');
		$this->Obat_model->edit_data($id_stok,$data);
	redirect(site_url('Obat/pustu7'));
	}

} 

?>