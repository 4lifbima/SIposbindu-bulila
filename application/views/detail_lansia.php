<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <h1 class="page-header">Detail Lansia</h1>
            <h4>Tanggal : <?php echo $tanggal; ?></h4>
            <div class="panel-body">
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Informasi Pribadi</strong>
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-6">
                                <h4><strong>ID Lansia</strong></h4>
                                <p><?php echo $id_lansia; ?></p>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>NIK</strong></h4>
                                <p><?php echo $nik; ?></p>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Nomor Telepon</strong></h4>
                                <p><?php echo $notelp; ?></p>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Nama Lansia</strong></h4>
                                <p><?php echo $nama_lengkap; ?></p>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Tanggal Lahir</strong></h4>
                                <p><?php echo $tgl_lahir; ?></p>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Agama</strong></h4>
                                <p><?php echo $agama; ?></p>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Status</strong></h4>
                                <p><?php echo $status; ?></p>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Alamat</strong></h4>
                                <p><?php echo $alamat; ?></p>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Jenis Kelamin</strong></h4>
                                <p><?php echo $jenis_kelamin; ?></p>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Pekerjaan</strong></h4>
                                <p><?php echo $pekerjaan; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>Informasi Penyakit Tidak Menular</strong>
                        </div>
                        <div class="panel-body">
                        <div class="col-lg-6">
                                <h4><strong>Riwayat PTMdk</strong></h4>
                                <p><?php echo $riwayat_PTMdk; ?></p>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Riwayat PTMds</strong></h4>
                                <p><?php echo $riwayat_PTMds; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-9">
                            <a href="/sip/na/cetak_lansia1.php?id_lansia=<?php echo $id_lansia; ?>" style="text-decoration: none;"><button
                                    type="button" class="btn btn-success"><i class="fa fa-print"></i></button></a>
                        </div>
                        <div class="col-md-3">
                        <p style="text-align: right;">
                                <a href="<?php echo base_url() . "index.php/Lansia"; ?>"
                                    style="text-decoration: none;"><button type="button"
                                        class="btn btn-primary"><i class="fa fa-backward"></i></button></a>
                                <a href="<?php echo base_url() . "index.php/Lansia/edit/" . $id_lansia; ?>"
                                    style="text-decoration: none;"><button type="button"
                                        class="btn btn-warning"><i class="fa fa-pencil"></i></button></a>
                                <a href="<?php echo base_url() . "index.php/Lansia/delete/" . $id_lansia; ?>"
                                    style="text-decoration: none;"><button type="button"
                                        class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                        </p>
            </div>
        </div>
    </div>
</div>

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>