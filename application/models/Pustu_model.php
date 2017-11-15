<?php 	
/**
* 	
*/
class Pustu_model extends CI_Model
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
	
 	function cek_login2($username,$password)
 	{
 		$this->db->where('id_pustu',$username);
 		$this->db->where('password_pustu',$password);
 		return $this->db->get($this->nama_table4)->row();// row untuk mengambil satu data aja.

 	} 

 	function ambil_data_idlogin($id_pustulogin){

 		return $this->db->query("select pustu.nama_pustu, stok.id_stok,obat.nama_obat, obat.regis_obat, obat.jenis_obat, stok.jumlah_stok, obat.harga_obat, stok.exp_date from obat,stok,pustu where obat.regis_obat=stok.regis_obat and stok.id_pustu=pustu.id_pustu and stok.id_pustu='".$id_pustulogin."' ")->result();
 	}

function ambil_data_id($id)
	{
		$this->db->where($this->id3,$id);
 		return $this->db->get($this->nama_table2)->row();// row untuk mengambil satu data aja.

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
/////// ga dipake

 	



 }
 ?>
