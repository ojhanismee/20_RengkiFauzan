<?php $this->load->view('templates/header2');?>

<header><center>
    <h1>Pengeluaran Stok Obat  <b><?php echo $this->session->userdata('username'); ?></b></h1>
</center>
</header>
<div id="content">

 <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1>Tambahkan Stok Puskesmas Pembantu</h1>
                        </div></div>
                        <div id="form">
<form action="<?php echo $update_aksi_1; ?>" method="POST" id="bg">
	<div class="form-group">
	<label>
		ID Puskesmas Pembantu : <?php echo $id_pustu; ?>
	</label>
	

		</div>
<div class="form-group">
<label>
	Nomor Registrasi Obat : <?php echo $regis_obat; ?>
</label>
	
	</div>
	
		<div class="form-group">
	<label>
		Tanggal Kadarluarsa : <?php echo $exp_date; ?>
	</label>
	
		</div>
		<div class="form-group">
	<label>
		Jumlah Stok : <?php echo $jumlah_stok; ?>
		
	</label><br>
	Masukan Jumlah Stok yang <b>telah dikeluarkan<b> : <br><br>
	<input type="text" name="kurang_stok" class="form-control" placeholder="Inputkan Stok Terjual" required value=""> 

		</div>
		<input type="hidden" name="id_pustu" value="<?php echo $id_pustu ?>">
		<input type="hidden" name="regis_obat" value="<?php echo $regis_obat ?>">
		<input type="hidden" name="current_stok" value="<?php echo $jumlah_stok ?>">
		<input type="hidden" name="id_stok" value="<?php echo $id_stok ?>">
		<button class="btn btn-primary" type="submit"><?php echo $button; ?> </button>
</form>
<div>
</div></div>
<?php $this->load->view('templates/footer2');?>
