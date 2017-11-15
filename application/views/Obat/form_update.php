<?php $this->load->view('templates/header');?>
<div id="page-wrapper">
 <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1>Tambahkan Stok Puskesmas Pembantu</h1>
                        </div></div>
<form action="<?php echo $update_aksi_1; ?>" method="POST">
	<div class="form-group">
	<label>
		ID Puskesmas Pembantu 
	</label>
	<input type="text" name="id_pustu" class="form-control" placeholder="Inputkan nama" required value="<?php echo $id_pustu; ?>"> 

		</div>
<div class="form-group">
<label>
	Nomor Registrasi Obat
</label>
	<input type="text" name="regis_obat" class="form-control" placeholder="Inputkan Jurusan" required value="<?php echo $regis_obat; ?>"" >

	</div>
	<div class="form-group">
	<label>
		Jumlah Stok
	</label>
	<input type="text" name="jumlah_stok" class="form-control" placeholder="Inputkan Akreditasi" required value="<?php echo $jumlah_stok; ?>"> 

		</div>
		<div class="form-group">
	<label>
		Tanggal Kadarluarsa
	</label>
	<input type="text" name="exp_date" class="form-control" placeholder="Inputkan Akreditasi" required value="<?php echo $exp_date; ?>"> 

		</div>
		<input type="hidden" name="id_stok" value="<?php echo $id_stok ?>">
		<button class="btn btn-primary" type="submit"><?php echo $button; ?> </button>
</form>
</div>
</div>
<?php $this->load->view('templates/footer');?>
