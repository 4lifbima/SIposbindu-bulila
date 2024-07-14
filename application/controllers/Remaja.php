<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Remaja extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("Welcome"));
        }
        $this->load->model('ModelPosyandu');
    }

    public function index() {
        $remaja = $this->ModelPosyandu->getData('remaja', '*');
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('tabel_remaja', array('remaja' => $remaja));
    }

    public function add() {
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('form_remaja');
    }

    public function processAdd() {
        $namaRemaja = $_POST['namaRemaja'];
        $namaOrtu = $_POST['namaOrtu'];
        $NKK = $_POST['NKK'];
        $NIK = $_POST['NIK'];
        $TD = $_POST['TD'];
        $BB = $_POST['BB'];
        $TB = $_POST['TB'];
        $LILA = $_POST['LILA'];
        $LP = $_POST['LP'];
        $GDS = $_POST['GDS'];
        $HB = $_POST['HB'];
        $statusGizi = $_POST['statusGizi'];
        $ket = $_POST['ket'];
        $tanggal = date("Y-m-d");
        if (trim($TD) == '' ||
            trim($BB) == '' ||
            trim($TB) == '' ||
            trim($LILA) == '' ||
            trim($LP) == '' ||
            trim($GDS) == '' ||
            trim($HB) == '' ||
            trim($statusGizi) == '') {
                redirect('Remaja/add');
        } else {
            $tambah_data = array(
                'idRemaja' => '', 'namaRemaja' => $namaRemaja,
                'namaOrtu' => $namaOrtu, 'NKK' => $NKK,
                'NIK' => $NIK, 'TD' => $TD,
                'BB ' => $BB , 'TB' => $TB,
                'LILA' => $LILA, 'LP' => $LP,
                'GDS' => $GDS,
                'HB' => $HB, 'statusGizi' => $statusGizi,
                'keterangan' => $ket, 'tanggal' => $tanggal
            );  
            $res = $this->ModelPosyandu->addData('remaja', $tambah_data);
            if ($res >= 1) {
                redirect('Remaja');}}}

    public function informasiRemaja($idRemaja) {
        $data = $this->ModelPosyandu->getData('remaja', '*', 'where idRemaja = "' . $idRemaja . '"');
        $idRemaja = array(
            'idRemaja' => $data[0]['idRemaja'],
            'namaRemaja' => $data[0]['namaRemaja'],
            'namaOrtu' => $data[0]['namaOrtu'],
            'NKK' => $data[0]['NKK'],
            'NIK' => $data[0]['NIK'],
            'TD' => $data[0]['TD'],
            'BB' => $data[0]['BB'],
            'TB' => $data[0]['TB'],
            'LILA' => $data[0]['LILA'],
            'LP' => $data[0]['LP'],
            'GDS' => $data[0]['GDS'],
            'HB' => $data[0]['HB'],
            'statusGizi' => $data[0]['statusGizi'],
            'keterangan' => $data[0]['keterangan'],
            'tanggal' => $data[0]['tanggal']
        );
        return $idRemaja;
    }

    public function detail($idRemaja) {
        $cek = $this->ModelPosyandu->cekId('remaja', 'where idRemaja = "' . $idRemaja . '"');
        if ($cek > 0) {
            $data = $this->informasiRemaja($idRemaja);
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('detail_remaja', $data);
        } else {
            redirect('Remaja');
        }
    }

    public function edit($idRemaja) {
        $cek = $this->ModelPosyandu->cekId('remaja', 'where idRemaja = "' . $idRemaja . '"');
        if ($cek > 0) {
            $data = $this->informasiRemaja($idRemaja);
            $this->load->view('header');
            $this->load->view('sidebar');
            $this->load->view('edit_remaja', $data);
        } else {
            redirect('Remaja');
        }
    }

    public function doUpdate() {
        $idRemaja = $_POST['idRemaja'];
        $namaRemaja = $_POST['namaRemaja'];
        $namaOrtu = $_POST['namaOrtu'];
        $NKK = $_POST['NKK'];
        $NIK = $_POST['NIK'];
        $TD = $_POST['TD'];
        $BB = $_POST['BB'];
        $TB = $_POST['TB'];
        $LILA = $_POST['LILA'];
        $LP = $_POST['LP'];
        $GDS = $_POST['GDS'];
        $HB = $_POST['HB'];
        $statusGizi = $_POST['statusGizi'];
        $ket = $_POST['ket'];
        $tanggal = date("Y-m-d");
        if (trim($namaRemaja) == ''||
            trim($namaOrtu) == '' ||
            trim($NIK) == '' ||
            trim($NKK) == '' ||
            trim($TD) == '' ||
            trim($BB) == '' ||
            trim($TB) == '' ||
            trim($LILA) == '' ||
            trim($LP) == '' ||
            trim($GDS) == '' ||
            trim($HB) == '' ||
            trim($statusGizi) == '') {
            redirect('Remaja/edit/' . $idRemaja);
        } else {
            $update_data = array(
                'namaRemaja' => $namaRemaja,
                'namaOrtu' => $namaOrtu,
                'NIK' => $NIK,
                'NKK' => $NKK,
                'TD' => $TD,
                'BB' => $BB,
                'TB' => $TB,
                'LILA' => $LILA,
                'LP' => $LP,
                'GDS' => $GDS,
                'HB' => $HB,
                'statusGizi' => $statusGizi,
                'keterangan' => $ket,
                'tanggal' => $tanggal
            );
            $where = array('idRemaja' => $idRemaja);
            $res = $this->ModelPosyandu->UpdateData('remaja', $update_data, $where);
            if ($res >= 1) {
                redirect('Remaja/detail/' . $idRemaja);}}}

    public function delete($idRemaja) {
        $where = array('idRemaja' => $idRemaja);
        $res = $this->ModelPosyandu->HapusData('remaja', $where);
        if ($res >= 1) {
            redirect('Remaja');}}

}