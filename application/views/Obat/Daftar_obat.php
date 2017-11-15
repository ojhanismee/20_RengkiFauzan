<?php $this->load->view('templates/header'); ?>
<div id="page-wrapper">
            
            <!-- /.row -->
            <div class="row">
<header><center>
    <h1>Daftar Data Obat  </h1>
</center>
</header>
<div id="content">
    <div class="panel-body">
        <table id="example" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No Registrasi</th>
                <th>Nama Obat</th>
             
                <th>Jenis Obat</th>
                <th>Harga@</th>
            
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php   foreach ($obat as $key => $value) { ?>



                <tr class="odd gradeX">
                 <td><?php echo $value->regis_obat; ?> </td>
                 <td><?php echo $value->nama_obat; ?> </td>
              
                 <td><?php echo $value->jenis_obat; ?> </td>
                 <td><?php echo $value->harga_obat; ?> </td>
                 
                 <td>
           <!--     <a href="<?php //echo site_url('obat/delete_1/'.$value->id_stok);?> <!-- " class="btn btn-danger"> 
                    <i class="fa fa-trash"></i>
                </a>-->
                <a href="<?php echo site_url('Obat/hapus/'.$value->regis_obat);?>" class="btn btn-warning">
                    <i class="fa fa-pencil-square"></i>
                </a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<!-- /.table-responsive -->


<!-- /.panel-body -->
</div></div>


<!-- jQuery -->
</div>
<?php $this->load->view('templates/footer') ?>


<script type="text/javascript">
    $(document).ready(function(){
        $('#example').DataTable();

    });
</script>
