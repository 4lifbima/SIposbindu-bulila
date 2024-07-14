<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Lansia</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <div class="filter">
                <span>
                    Tanggal awal :
                    <input type="date" id="tglAwal" value="<?php echo date('Y-m-d'); ?>">
                </span>
                &nbsp;
                <span>
                    Tanggal akhir :
                    <input type="date" id="tglAkhir" value="<?php echo date('Y-m-d'); ?>">
                </span>
                &nbsp;
                <button type="button" id="btnCetak" class="btn btn-success"><i class="fa fa-print"></i></button>
            </div>
            <br>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr style="font-size: 14px">
                                <th style="text-align: center;">ID</th>
                                <th style="text-align: center;">NIK</th>
                                <th style="text-align: center;">No. Telp</th>
                                <th style="text-align: center;">Nama</th>
                                <th style="text-align: center;">Alamat</th>
                                <th style="text-align: center;">Jenis Kelamin</th>
                                <th style="text-align: center;">Pekerjaan</th>
                                <th style="text-align: center;">Riwayat PTM DK</th>
                                <th style="text-align: center;">Riwayat PTM DS</th>
                                <th style="text-align: center;">Tanggal</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($lansia as $la) {?>
                            <tr style="font-size: 14px">
                                <td style="text-align: center;"><?php echo $la['id_lansia']; ?></td>
                                <td style="text-align: center;"><?php echo $la['nik']; ?></td>
                                <td style="text-align: center;"><?php echo $la['notelp']; ?></td>
                                <td style="text-align: center;"><?php echo $la['nama_lengkap']; ?></td>
                                <td style="text-align: center;"><?php echo $la['alamat'] ?></td>
                                <td style="text-align: center;"><?php echo $la['jenis_kelamin'] ?></td>
                                <td style="text-align: center;"><?php echo $la['pekerjaan'] ?></td>
                                <td style="text-align: center;"><?php echo $la['riwayat_PTMdk'] ?></td>
                                <td style="text-align: center;"><?php echo $la['riwayat_PTMds'] ?></td>
                                <td style="text-align: center;"><?php echo $la['tanggal'] ?></td>
                                <td style="text-align: center;">
                                    <a href="<?php echo base_url() . "/Lansia/detail/" . $la['id_lansia']; ?>" style="text-decoration: none;" title="Informasi Lengkap"><button type="button" class="btn btn-primary btn-circle"><i class="fa fa-info-circle"></i></button>
                                    <a href="<?php echo base_url() . "/Lansia/edit/" . $la['id_lansia']; ?>" style="text-decoration: none;" title="Ubah Data"><button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                                    <a href="<?php echo base_url() . "/Lansia/delete/" . $la['id_lansia']; ?>" style="text-decoration: none;" title="Hapus Data"><button type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                    <p>
                        <a href="<?php echo base_url() . "/Lansia/add"; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah</button>
                </div>
            </div>

            <script>
        document.getElementById('btnCetak').addEventListener('click', function () {
            var tglAwal = document.getElementById('tglAwal').value;
            var tglAkhir = document.getElementById('tglAkhir').value;

            window.location.href = "/sip/na/cetak_lansia.php?tanggal_awal=" + tglAwal + "&tanggal_akhir=" + tglAkhir;
        });
    </script>