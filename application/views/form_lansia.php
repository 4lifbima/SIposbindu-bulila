<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tambahkan Data Lansia</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method ="POST" action="<?php echo base_url() . "index.php/Lansia/processAdd/" ?>">
                                <div class="col-lg-6">
                                    <h2>Informasi Pribadi</h2>
                                    <hr>
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input class="form-control" type="number" name="NIK" title="NIK" placeholder="NIK" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lansia</label>
                                        <input class="form-control" type="text" name="nama_lengkap" title="Nama Lansia" placeholder="Nama Lansia" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nomor Telpon</label>
                                        <input class="form-control" type="text" name="notelp" title="Nomor Telfon" placeholder="Nomor telfon" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input class="form-control" type="text" name="tgl_lahir" title="Tanggal Lahir" placeholder="Tanggal Lahir" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Usia Lansia</label>
                                        <input class="form-control" type="text" name="usia" title="Usia" placeholder="Usia" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <input class="form-control" type="text" name="agama" title="Agama" placeholder="Nama Lansia" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <input class="form-control" type="text" name="status" title="Status" placeholder="Status" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" type="text" name="alamat" title="Alamat" required placeholder="Alamat"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input class="form-control" type="text" name="pekerjaan" title="Pekerjaan" placeholder="Pekerjaan" required>
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
                                </div>
                                <div class="col-lg-6">
                                    <h2>Informasi Kesehatan</h2>
                                    <hr>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Riwayat PTM DK</label>
                                        <input class="form-control" title="Riwayat PTM DK" type="text" name="riwayat_PTMdk" placeholder="Riwayat PTM DK" required>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Riwayat PTM DS</label>
                                        <input class="form-control" title="Riwayat PTM DS" type="text" name="riwayat_PTMds" placeholder="Riwayat PTM DS" required>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-info" style="width: 25%">Daftar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script type="text/javascript">
    function hanyaHuruf(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 32 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && charCode > 39)
            return false;
        return true;
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
