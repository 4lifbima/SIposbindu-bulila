<?php
$koneksi = mysqli_connect("localhost", "root", "", "posyandu");

if (mysqli_connect_errno()) {
    echo "<script>alert('gagal mengambil data');</script>";
    exit;
}
$tanggal_awal = $_GET['tanggal_awal'];
$tanggal_akhir = $_GET['tanggal_akhir'];

if (isset($_GET['tanggal_awal']) && isset($_GET['tanggal_akhir'])) {
    $tanggal_awal = $_GET['tanggal_awal'];
    $tanggal_akhir = $_GET['tanggal_akhir'];

    if (strtotime($tanggal_awal) == false && strtotime($tanggal_akhir) == false) {
        header("location: /sip/");
        exit;
    }

} else {
    header("location: /sip/");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/asset/vendor/bootstrap/css/bootstrap.min.css">
    <script>
        window.print();
    </script>
    <style>
        table {
            border-bottom: solid 2px #000;
            width: 100%;
        }
        </style>
</head>

<body>
    <br>
    <table>
        <tr>
            <td width="2%" heigt="3%"><img src="../assets/asset/img/logokab.jpg" alt="" width="110"></td>
            <td align="center" width="90%"><h3>PEMERINTAH KABUPATEN GORONTALO<br>KECAMATAN TELAGA<br>DESA BULILA</h3><i>Jl. Raja Wadipalapa, Desa Bulila, Kec.Telaga, Kab.Gorontalo 96138</i></td>
            <td width="2%" heigt="3%"><img src="../assets/asset/img/puskesmas.png" alt="" width="110"></td>
        </tr>
    </table>
    <br>
    <div id="page-wrapper">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h6><?php echo str_replace("-", "/", $_GET['tanggal_awal'])." - ".str_replace("-", "/", $_GET['tanggal_akhir']) ?></h6>
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr style="font-size: 14px">
                                <th style="text-align: center;">NIK</th>
                                <th style="text-align: center;">Nama Lansia</th>
                                <th style="text-align: center;">Nomor Telfon</th>
                                <th style="text-align: center;">Tanggal Lahir</th>
                                <th style="text-align: center;">Agama</th>
                                <th style="text-align: center;">Status</th>
                                <th style="text-align: center;">Alamat</th>
                                <th style="text-align: center;">Jenis Kelamin</th>
                                <th style="text-align: center;">Pekerjaan</th>
                                <th style="text-align: center;">Riwayat PTM DK</th>
                                <th style="text-align: center;">Riwayat PTM DS</th>
                                <th style="text-align: center;">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $tanggal_awal = $_GET['tanggal_awal'];
                        $tanggal_akhir = $_GET['tanggal_akhir'];
                        $result = mysqli_query($koneksi, "SELECT * FROM lansia WHERE DATE(tanggal) BETWEEN '$tanggal_awal' AND '$tanggal_akhir' ORDER BY tanggal asc;");
                        if (mysqli_num_rows($result) > 0) {
                            $i = 0;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $i++;
                                ?>
                                <tr style="font-size: 14px">
                                    <td style="text-align: center;"><?php echo $row['nik']; ?></td>
                                    <td style="text-align: center;"><?php echo $row['nama_lengkap']; ?></td>
                                    <td style="text-align: center;"><?php echo $row['notelp']; ?></td>
                                    <td style="text-align: center;"><?php echo $row['tgl_lahir']; ?></td>
                                    <td style="text-align: center;"><?php echo $row['agama']; ?></td>
                                    <td style="text-align: center;"><?php echo $row['status']; ?></td>
                                    <td style="text-align: center;"><?php echo $row['alamat']?></td>
                                    <td style="text-align: center;"><?php echo $row['jenis_kelamin']?></td>
                                    <td style="text-align: center;"><?php echo $row['pekerjaan']?></td>
                                    <td style="text-align: center;"><?php echo $row['riwayat_PTMdk']?></td>
                                    <td style="text-align: center;"><?php echo $row['riwayat_PTMds']?></td>
                                    <td style="text-align: center;"><?php echo $row['tanggal']?></td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <p>
                    <a href="<?php echo base_url() . "/Bayi/add"; ?>"><button type="button"
                            class="btn btn-primary">Tambah</button>
                </p>
            </div>
        </div>

</body>

</html>