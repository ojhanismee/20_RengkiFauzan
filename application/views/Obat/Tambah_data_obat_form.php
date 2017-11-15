<?php $this->load->view('templates/header');?>
<div id="page-wrapper">
 <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1>Tambahkan Data Obat Baru</h1>
                        </div></div>
<form action="<?php echo $aksi_tambah; ?>" method="POST">
	<div class="form-group">
	<label>
		Nama Obat
	</label>
	<input type="text" name="nama_obat" class="form-control" placeholder="ID Pustu" required > 

		</div>
<div class="form-group">
<label>
	Nomor Registrasi Obat
</label>
	<input type="text" name="regis_obat" class="form-control" placeholder="Inputkan No registrasi obat" required >

	</div>
	<div class="form-group">
	<label>
		Jenis Obat
	</label>
	<input type="text" name="jenis_obat" class="form-control" placeholder="Inputkan Jumlah stok" required > 

		</div>
		<div class="form-group">
	<label>
		Harga Obat
	</label>
	<input type="text" name="harga_obat" class="form-control" placeholder="Inputkan Tanggal Kadarluarsa" required value=""> 

		</div>
		
		<button class="btn btn-primary" type="submit"><?php echo $button; ?> </button>
</form>
</div>
</div>
<?php $this->load->view('templates/footer');?>
