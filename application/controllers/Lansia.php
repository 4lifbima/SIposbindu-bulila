<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lansia extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("Welcome"));
        }
        $this->load->model('ModelPosyandu');
    }

    public function index() {
        $lansia = $this->ModelPosyandu->getData('lansia', '*');
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('tabel_lansia', array('lansia' => $lansia));
    }

    public function add() {
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('form_lansia');
    }

    public function processAdd() {
        $nik = $_POST['NIK'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $notelp = $_POST['notelp'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $usia = $_POST['usia'];
        $agama = $_POST['agama'];
        $status = $_POST['status'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'] == '1' ? 'P' : 'L';
        $pekerjaan = $_POST['pekerjaan'];
        $riwayat_PTMdk = $_POST['riwayat_PTMdk'];
        $riwayat_PTMds = $_POST['riwayat_PTMds'];
        $tanggal = date("Y-m-d");
        if (trim($riwayat_PTMdk) == '' || 
            trim($riwayat_PTMds) == '') {
                redirect('Lansia/add');
            } else {
                $tambah_data = array(
                    'nik' => $nik,
                    'nama_lengkap' => $nama_lengkap,
                    'notelp' => $notelp,
                    'tgl_lahir'=> $tgl_lahir, 
                    'usia'=> $usia, 
                    'agama'=> $agama,
                    'status'=> $status,
                    'alamat' => $alamat,
                    'jenis_kelamin' => $jenis_kelamin,
                    'pekerjaan' => $pekerjaan,
                    'riwayat_PTMdk' => $riwayat_PTMdk,
                    'riwayat_PTMds' => $riwayat_PTMds,
                    'tanggal' => $tanggal
                );  
                $res = $this->ModelPosyandu->addData('lansia', $tambah_data);
                if ($res >= 1) {
                    redirect('Lansia');
                }
            }
        }

        public function informasiLansia($id_lansia) {
            $data = $this->ModelPosyandu->getData('lansia', '*', 'where id_lansia = "' . $id_lansia . '"');
            $id_lansia = array(
                'id_lansia' => $data[0]['id_lansia'],
                'nik' => $data[0]['nik'],
                'nama_lengkap' => $data[0]['nama_lengkap'],
                'notelp' => $data[0]['notelp'],
                'tgl_lahir' => $data[0]['tgl_lahir'],
                'usia' => $data[0]['usia'],
                'agama' => $data[0]['agama'],
                'status' => $data[0]['status'],
                'alamat' => $data[0]['alamat'],
                'jenis_kelamin' => $data[0]['jenis_kelamin'],
                'pekerjaan' => $data[0]['pekerjaan'],
                'riwayat_PTMdk' => $data[0]['riwayat_PTMdk'],
                'riwayat_PTMds' => $data[0]['riwayat_PTMds'],
                'tanggal' => $data[0]['tanggal']
            );  
            return $id_lansia;
        }
    
        public function detail($id_lansia) {
            $cek = $this->ModelPosyandu->cekId('lansia', 'where id_lansia = "' . $id_lansia . '"');
            if ($cek > 0) {
                $data = $this->informasiLansia($id_lansia);
                $this->load->view('header');
                $this->load->view('sidebar');
                $this->load->view('detail_lansia', $data);
            } else {   
                redirect('Lansia');
            }
        }
    
        public function edit($id_lansia) {
            $cek = $this->ModelPosyandu->cekId('Lansia', 'where id_lansia = "' . $id_lansia . '"');
            if ($cek > 0) {
                $data = $this->informasiLansia($id_lansia);
                $this->load->view('header');
                $this->load->view('sidebar');
                $this->load->view('edit_lansia', $data);
            } else {
                redirect('Lansia');
            }
        }
    
        public function doUpdate() {
            $id_lansia =$_POST['id_lansia'];
            $nik = $_POST['nik'];
            $nama_lengkap = $_POST['nama_lengkap'];
            $notelp = $_POST['notelp'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $usia = $_POST['usia'];
            $agama = $_POST['agama'];
            $status = $_POST['status'];
            $alamat = $_POST['alamat'];
            $jenis_kelamin = $_POST['jenis_kelamin'] == '1' ? 'P' : 'L';
            $pekerjaan = $_POST['pekerjaan'];
            $riwayat_PTMdk = $_POST['riwayat_PTMdk'];
            $riwayat_PTMds = $_POST['riwayat_PTMds'];
            $tanggal = date("Y-m-d");
            if (trim($nik) == '' ||
                trim($nama_lengkap) == '' ||
                trim($notelp) == '' ||
                trim($tgl_lahir) == '' ||
                trim($usia) == '' ||
                trim($agama) == '' ||
                trim($status) == '' ||
                trim($alamat) == '' ||
                trim($jenis_kelamin) == '' ||
                trim($pekerjaan) == '' ||
                trim($riwayat_PTMdk) == '' ||
                trim($riwayat_PTMds) == '') {
                redirect('Lansia/edit/' . $id_lansia);
            } else {
                $update_data = array(
                    'nik' => $nik,
                    'nama_lengkap' => $nama_lengkap, 
                    'notelp' => $notelp, 
                    'tgl_lahir'=> $tgl_lahir, 
                    'usia'=> $usia, 
                    'agama'=> $agama,
                    'status'=> $status,
                    'alamat' => $alamat,
                    'jenis_kelamin' => $jenis_kelamin,
                    'pekerjaan' => $pekerjaan,
                    'riwayat_PTMdk' => $riwayat_PTMdk,
                    'riwayat_PTMds' => $riwayat_PTMds,
                    'tanggal' => $tanggal 
                );  
                $where = array('id_lansia' => $id_lansia);
                $res = $this->ModelPosyandu->UpdateData('lansia', $update_data, $where);
                if ($res >= 1) {
                    redirect('Lansia/detail/' . $id_lansia);}}}
    
        public function delete($id_lansia) {
            $where = array('id_lansia' => $id_lansia);
            $res = $this->ModelPosyandu->HapusData('lansia', $where);
            if ($res >= 1) {
                redirect('Lansia');
            }
        }

    }
