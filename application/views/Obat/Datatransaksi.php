<?php $this->load->view('templates/header'); ?>

 <div id="page-wrapper">
            <div class="row">
              
                <div class="col-md-12 ">
                  
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                 
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1>Data Transaksi Pengurangan Stok Obat Oleh pustu</h1>
                        </div>
                        <!-- /.panel-heading -->
                         <div class="panel-body">
                            <table id="example" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nama Pustu</th>
                                        <th>No Registrasi</th>
                                        <th>Nama Obat</th>
                                        <th>Jenis Obat</th>
                                        <th>Pengurangan Stok</th>
                                        <th>Sisa Stok</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                <?php   foreach ($obat as $key => $value) { ?>
            
               
          
                                    <tr class="odd gradeX">
                                    <td><?php echo $value->nama_pustu; ?> </td>
                                       <td><?php echo $value->regis_obat; ?> </td>
                                        <td><?php echo $value->nama_obat; ?> </td>
                                        <td><?php echo $value->jenis_obat; ?></td>
                                        <td><?php echo $value->pengurangan_stok; ?> </td>
                                        <td><?php echo $value->sisa_stok; ?> </td>
                                      
                       
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
