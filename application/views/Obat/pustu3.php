<?php $this->load->view('templates/header'); ?>

 <div id="page-wrapper">
            <div class="row">
              
                <div class="col-md-12 ">
                  
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                    <div class="col-md-12 text-right" >
        <a href="<?php echo site_url('obat/tambah_1');?>" class="btn btn-primary" style="margin-top:20px;margin-bottom:20px"><i class="fa fa-plus-square"> Tambahkan Stok</i></a>
    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1>Data Stok Obat di Puskesmas Pembantu 3</h1>
                        </div>
                        <!-- /.panel-heading -->
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
                <a href="<?php echo site_url('obat/delete_3/'.$value->id_stok);?>" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                </a>
                <a href="<?php echo site_url('obat/update_3/'.$value->id_stok);?>" class="btn btn-warning">
                    <i class="fa fa-pencil-square"></i>
                </a>
            </td>
                                    </tr>
                                     <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            
        </div>
        <!-- /#page-wrapper -->

    </div>

    <!-- jQuery -->
   
   <?php $this->load->view('templates/footer') ?>
  

 <script type="text/javascript">
    $(document).ready(function(){
        $('#example').DataTable();

        });
 </script>
