<?php 	
/**
* 	
*/
class Obat_model extends CI_Model
{
	public $nama_table ='obat';
	public $nama_table2 ='stok';
	public $nama_table3 ='admin';
	public $nama_table4 ='pustu';
	public $nama_table5= 'transaksi';
	public $id = 'regis_obat';
	public $id2 = 'id_pustu';
	public $id3 = 'id_stok';
	public $jenis = 'jenis_obat';
	public $order = 'ASC';

	function __construct()
	{

	}
	function cek_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
 		return $this->db->get($this->nama_table3)->row();// row untuk mengambil satu data aja.

 	} 
 	function cek_login2($username,$password)
 	{
 		$this->db->where('id_pustu',$username);
 		$this->db->where('password_pustu',$password);
 		return $this->db->get($this->nama_table4)->row();// row untuk mengambil satu data aja.

 	} 

 	function ambil_data($value=''){
		//$this->db->order_by($this->id,$this->order);
		//return $this->db->get($this->nama_table)->result();
		// UNTUK JUMLAH SELURH VERSI GROUPBY
 		return $this->db->query("select pustu.nama_pustu ,obat.nama_obat, obat.regis_obat, obat.jenis_obat, stok.jumlah_stok, obat.harga_obat, stok.exp_date from obat,stok,pustu where obat.regis_obat=stok.regis_obat and stok.id_pustu=pustu.id_pustu")->result();
 	}

function ambil_datatransaksi($value=''){
		//$this->db->order_by($this->id,$this->order);
		//return $this->db->get($this->nama_table)->result();
		// UNTUK JUMLAH SELURH VERSI GROUPBY
 		return $this->db->query("select pustu.nama_pustu ,obat.regis_obat,obat.nama_obat, obat.jenis_obat, transaksi.sisa_stok, transaksi.pengurangan_stok from obat,transaksi,pustu where obat.regis_obat=transaksi.regis_obat and transaksi.id_pustu=pustu.id_pustu")->result();
 	}

 	function ambil_data_idlogin($id_pustulogin){

 		return $this->db->query("select pustu.nama_pustu, stok.id_stok,obat.nama_obat, obat.regis_obat, obat.jenis_obat, stok.jumlah_stok, obat.harga_obat, stok.exp_date from obat,stok,pustu where obat.regis_obat=stok.regis_obat and stok.id_pustu=pustu.id_pustu and stok.id_pustu='".$id_pustulogin."' ")->result();
 	}
////// TAMBAH DATA DAFTAR OBAT
 	function tambah_data_daftar_obat($data)//data dalam bentuk array
	{
		return $this->db->insert($this->nama_table,$data);

	}
	function ambil_data_obat($value=''){

 		return $this->db->get($this->nama_table)->result();
 	}
 	function hapus_data_obat($id)
 	{
 		
 		$this->db->where($this->id, $id);
 		
 		return $this->db->delete($this->nama_table);
 	}

/////// PUSTU 1
 	function ambil_data_pustu1($value=''){

 		return $this->db->query("select stok.id_stok,obat.nama_obat, obat.regis_obat, obat.jenis_obat, stok.jumlah_stok, obat.harga_obat, stok.exp_date from obat,stok,pustu where obat.regis_obat=stok.regis_obat and stok.id_pustu=pustu.id_pustu and stok.id_pustu='1' ")->result();
 	}
 	function hapus_data($id,$pustu_id)
 	{
 		
 		$this->db->where($this->id3 , $id);
 		$this->db->where($this->id2 , $pustu_id);
 		return $this->db->delete($this->nama_table2);
 	}
	function tambah_data_1($data)//data dalam bentuk array
	{
		return $this->db->insert($this->nama_table2,$data);
	}
	function ambil_data_id($id)
	{
		$this->db->where($this->id3,$id);
 		return $this->db->get($this->nama_table2)->row();// row untuk mengambil satu data aja.

 	}
 	function edit_data($id,$data)//Hampir sama dg tambah data. pembedanya ada id.
 	{
 		$this->db->where($this->id3,$id);
 		return $this->db->update($this->nama_table2,$data);
 	}
function edit_datapustu($id,$stok,$data)//Hampir sama dg tambah data. pembedanya ada id.
 	{
 		//$this->db->where($this->id3,$id);
 		
 		//$sisa= $stok - $kurang;
 		$this->db->insert($this->nama_table5,$data);
 		$this->db->set('jumlah_stok',$stok);
 		$this->db->where($this->id3,$id);
 		return $this->db->update($this->nama_table2);
 		
// 		return $this->db->query("update stok set jumlah_stok='"+$sisa+"' where id_stok='"+$id+"'");
 	}
///// oRTHER pustu

 	function ambil_data_pustu2($value=''){

 		return $this->db->query("select stok.id_stok,obat.nama_obat, obat.regis_obat, obat.jenis_obat, stok.jumlah_stok, obat.harga_obat, stok.exp_date from obat,stok,pustu where obat.regis_obat=stok.regis_obat and stok.id_pustu=pustu.id_pustu and stok.id_pustu='2' ")->result();
 	}
 	function ambil_data_pustu3($value=''){

 		return $this->db->query("select stok.id_stok,obat.nama_obat, obat.regis_obat, obat.jenis_obat, stok.jumlah_stok, obat.harga_obat, stok.exp_date from obat,stok,pustu where obat.regis_obat=stok.regis_obat and stok.id_pustu=pustu.id_pustu and stok.id_pustu='3' ")->result();
 	}
 	function ambil_data_pustu4($value=''){

 		return $this->db->query("select stok.id_stok,obat.nama_obat, obat.regis_obat, obat.jenis_obat, stok.jumlah_stok, obat.harga_obat, stok.exp_date from obat,stok,pustu where obat.regis_obat=stok.regis_obat and stok.id_pustu=pustu.id_pustu and stok.id_pustu='4' ")->result();
 	}
 	function ambil_data_pustu5($value=''){

 		return $this->db->query("select stok.id_stok,obat.nama_obat, obat.regis_obat, obat.jenis_obat, stok.jumlah_stok, obat.harga_obat, stok.exp_date from obat,stok,pustu where obat.regis_obat=stok.regis_obat and stok.id_pustu=pustu.id_pustu and stok.id_pustu='5' ")->result();
 	}
 	function ambil_data_pustu6($value=''){

 		return $this->db->query("select stok.id_stok,obat.nama_obat, obat.regis_obat, obat.jenis_obat, stok.jumlah_stok, obat.harga_obat, stok.exp_date from obat,stok,pustu where obat.regis_obat=stok.regis_obat and stok.id_pustu=pustu.id_pustu and stok.id_pustu='6' ")->result();
 	}
 	function ambil_data_pustu7($value=''){

 		return $this->db->query("select stok.id_stok,obat.nama_obat, obat.regis_obat, obat.jenis_obat, stok.jumlah_stok, obat.harga_obat, stok.exp_date from obat,stok,pustu where obat.regis_obat=stok.regis_obat and stok.id_pustu=pustu.id_pustu and stok.id_pustu='7' ")->result();
 	}



 }
 ?>
