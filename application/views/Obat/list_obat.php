<?php $this->load->view('templates/header2'); ?>

<header><center>
    <h1>Daftar Stok Obat  <b><?php echo $this->session->userdata('username'); ?></b></h1>
</center>
</header>
<div id="content">
    <div class="panel-body">
        <table id="example" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No Registrasi</th>
                <th>Nama Obat</th>
                <th>Jumlah Stok</th>
                <th>Jenis Obat</th>
                <th>Harga@</th>
                <th>tanggal kadarluarsa </th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php   foreach ($obat as $key => $value) { ?>



                <tr class="odd gradeX">
                 <td><?php echo $value->regis_obat; ?> </td>
                 <td><?php echo $value->nama_obat; ?> </td>
                 <td><?php echo $value->jumlah_stok; ?></td>
                 <td><?php echo $value->jenis_obat; ?> </td>
                 <td><?php echo $value->harga_obat; ?> </td>
                 <td><?php echo $value->exp_date; ?> </td>
                 <td>
           <!--     <a href="<?php //echo site_url('obat/delete_1/'.$value->id_stok);?> <!-- " class="btn btn-danger"> 
                    <i class="fa fa-trash"></i>
                </a>-->
                <a href="<?php echo site_url('pustu/update_1/'.$value->id_stok);?>" class="btn btn-warning">
                    <i class="fa fa-pencil-square"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<!-- /.table-responsive -->


<!-- /.panel-body -->
</div>


<!-- jQuery -->
</div>
<?php $this->load->view('templates/footer2') ?>


<script type="text/javascript">
    $(document).ready(function(){
        $('#example').DataTable();

    });
</script>
