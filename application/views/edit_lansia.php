<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Data Lansia</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form method ="POST" action="<?php echo base_url() . "index.php/Lansia/doUpdate/"?>">
                                <div class="col-lg-6">
                                    <h2>Informasi Pribadi</h2>
                                    <hr>
                                    <div class="form-group">
                                        <label>ID Lansia</label>
                                        <input class="form-control" title="Nomor Daftar Bayi" type="number" name="id_lansia" value="<?php echo $id_lansia; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input class="form-control" title="Nama Bayi" name="nik" value="<?php echo $nik; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lansia</label>
                                        <input class="form-control" title="Nama Lengkap" type="text" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telfon</label>
                                        <input class="form-control" title="Nama Lengkap" name="notelp" value="<?php echo $notelp; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input class="form-control" type="text" title="Tanggal Lahir" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Usia Lansia</label>
                                        <input class="form-control" type="text" title="Usia" name="usia" value="<?php echo $usia; ?>">
                                    </div>
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <input class="form-control" type="text" title="agama" name="agama" value="<?php echo $agama; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input class="form-control" type="text" title="status" name="status" value="<?php echo $status; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" type="text" title="alamat" name="alamat" value="<?php echo $alamat; ?>">
                                        </div>
                                        <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <br>
                                        <label class="radio-inline">
                                            <input type="radio" name="jenis_kelamin" id="optionsRadiosInline1" value="2" checked>Laki - Laki
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="jenis_kelamin" id="optionsRadiosInline2" value="1">Perempuan
                                        </label>
                                    </div>
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <input class="form-control" type="text" name="pekerjaan" title="pekerjaan" value="<?php echo $pekerjaan; ?>">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-6">
                                    <h2>Informasi Penyakit Tidak Menular</h2>
                                    <hr>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Riwayat PTMdk</label>
                                            <input class="form-control" type="text" title="riwayat_PTMdk" name="riwayat_PTMdk" value="<?php echo $riwayat_PTMdk; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                            <label>Riwayat PTMds</label>
                                            <input class="form-control" type="text" title="riwayat_PTMds" name="riwayat_PTMds" value="<?php echo $riwayat_PTMds; ?>">
                                        </div>
                                    </div>
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-info" style="width: 20%"><i class="fa fa-floppy-o"> </i> Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
