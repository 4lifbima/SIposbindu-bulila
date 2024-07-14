<?php
    $koneksi = mysqli_connect("localhost", "root", "", "posyandu");

    if (mysqli_connect_errno()) {
        echo "<script>alert('gagal mengambil data');</script>";
        exit;
    }
    
    if (!isset($_GET['id_lansia'])){
        header("location: /sip/");
        exit;
    }

    $query = mysqli_query($koneksi, "SELECT * FROM lansia where id_lansia=".$_GET['id_lansia']);
    if(!$query) {
        header("location: /sip/");
        exit;
    } else {
        $d = mysqli_fetch_assoc($query);
        $id_lansia = $d['id_lansia'];
        $nik = $d['nik'];
        $nama_lengkap = $d['nama_lengkap'];
        $tgl_lahir = $d['tgl_lahir'];
        $agama = $d['agama'];
        $status = $d['status'];
        $alamat = $d['alamat'];
        $jkel = $d['jenis_kelamin'];
        $pekerjaan = $d['pekerjaan'];
        $riwayat_PTMdk = $d['riwayat_PTMdk'];
        $riwayat_PTMds = $d['riwayat_PTMds'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/asset/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../assets/vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script>
        window.print();
    </script>
    <style>
        table {
            border-bottom: solid 3px #000;
            width: 100%;
        }
        </style>
</head>
<body>
<br>
    <table>
        <tr>
        <td width="2%" heigt="3%"><img src="../assets/asset/img/Logokab.jpg" alt="" width="105"></td>
            <td align="center" width="90%"><h3>PEMERINTAH KABUPATEN GORONTALO<br>KECAMATAN TELAGA<br>DESA BULILA</h3><i>Jl. Raja Wadipalapa, Desa Bulila, Kec.Telaga, Kab.Gorontalo 96138</i></td>
            <td width="2%" heigt="3%"><img src="../assets/asset/img/puskesmas.png" alt="" width="110"></td>
        </tr>
    </table>
<br>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <!-- <h1 class="page-header">Detail Lansia</h1> -->
            <div class="panel-body">
                <div class="row">
                    <div class="panel mb-3 mt-3 panel-default">
                        <div class="panel-heading">
                            <strong>Informasi Pribadi</strong>
                            </div>
                        <div class="panel-body">
                            <div class="col-lg-6">
                                <h4><strong>NIK :</strong> <?php echo $nik; ?></h4> 
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Nama Lansia :</strong> <?php echo $nama_lengkap; ?></h4>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Tanggal Lahir :</strong> <?php echo $tgl_lahir; ?></h4>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Agama :</strong> <?php echo $agama; ?></h4>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Status :</strong> <?php echo $status; ?></h4>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Alamat :</strong> <?php echo $alamat; ?></h4>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Jenis Kelamin :</strong> <?php echo $jkel; ?></h4>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Pekerjaan :</strong> <?php echo $pekerjaan; ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="panel mt-3 panel-default">
                        <div class="panel-heading">
                            <strong>Informasi Penyakit Tidak Menular</strong>
                        </div>
                        <div class="panel-body">
                        <div class="col-lg-6">
                                <h4><strong>Riwayat PTMdk :</strong> <?php echo $riwayat_PTMdk; ?></h4>
                            </div>
                            <div class="col-lg-6">
                                <h4><strong>Riwayat PTMds :</strong> <?php echo $riwayat_PTMds; ?></h4>
                            </div>
                        </div>
                    </div>
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
</body>
</html>

<?php
    }
?>