<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '  <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="'.site_url('Obat/index').'"><i class="fa fa-home fa-fw"></i> Halaman Utama</a>
                        </li>
                     <li>
                            <a href="'.site_url('Obat/index').'"><i class="fa fa-database fa-fw"></i> Daftar Seluruh Stok</a>
                        </li>
                        <li>
                            <a href="'.site_url('Obat/Daftar_obat').'"><i class="fa fa-medkit fa-fw"></i> Daftar Obat</a>
                        </li>
                        <li>
                            <a href="tables.php"><i class="fa fa-table fa-fw"></i> Data Obat<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li>
                                    <a href="'.site_url('Obat/pustu1').'">PUSTU1</a>
                                </li>
                                <li>
                                    <a href="'.site_url('Obat/pustu2').'">PUSTU2</a>
                                </li>
                                <li>
                                    <a href="'.site_url('Obat/pustu3').'">PUSTU3</a>
                                </li>
                                <li>
                                    <a href="'.site_url('Obat/pustu4').'">PUSTU4</a>
                                </li>
                                <li>
                                    <a href="'.site_url('Obat/pustu5').'">PUSTU5</a>
                                </li>
                                <li>
                                    <a href="'.site_url('Obat/pustu6').'">PUSTU6</a>
                                </li>
                                <li>
                                    <a href="'.site_url('Obat/pustu7').'">PUSTU7</a>
                                </li>
                            </ul>
                        </li>
                         <li>
                            <a href="'.site_url('Obat/Ambildata_transaksi').'"><i class="fa fa-edit fa-fw"></i> Daftar Transaksi Pustu</a>
                        </li>
                        <li>
                            <a href="'.site_url('Obat/tambah_1').'"><i class="fa fa-plus fa-fw"></i> Masukan Stok Baru</a>
                        </li>
                      <li>
                            <a href="'.site_url('Obat/tambah_data_obat').'"><i class="fa fa-plus-circle fa-fw"></i> Masukan Data Obat Baru</a>
                        </li>
                        <li>
                            <a href="'.base_url('login/logout').'"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>';
	}
