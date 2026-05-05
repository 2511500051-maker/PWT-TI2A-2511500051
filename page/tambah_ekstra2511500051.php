<?php
include "config/koneksi.php"
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tambah Data Extrakulikuler</h1>
            </div>
        </div>
    </div>
</div>

<?php

if (isset($_POST['tambah'])) {
    $id_ekstra051 = $_POST['id_ekstra051'];
    $nama_ekstra051 = $_POST['nama_ekstra051'];
    $ket051 = $_POST['ket051'];
    $semester051 = $_POST['semester051'];
    $thn_ajaran051 = $_POST['thn_ajaran051'];

    $insert = mysqli_query($koneksi, "INSERT INTO ekstra_2511500051 (id_ekstra051, nama_ekstra051, ket051, semester051, thn_ajaran051) 
    VALUES ('$id_ekstra051', '$nama_ekstra051', '$ket051', '$semester051', '$thn_ajaran051')")
    or die (mysqli_error($koneksi));
    if ($insert) {
        echo '<div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            <h5><i class="icon fas fa-info"></i> Info</h5>
            <h4>Berhasil Di Simpan</h4></div>';
        echo '<meta http-equiv="refresh" content="1;url=index.php?page=ekstra2511500051">';
    } else {
        echo '<div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                <h5><i class="icon fas fa-info"></i> Info</h5>
                <h4>Gagal Di Simpan</h4>
            </div>';
    }
}
?>
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="card-body p-2">
                    <form method="POST" action="">
                        <div class="form-group
                        ">
                            <label for="id_ekstra051">Id Extrakulikuler:</label>
                            <input type="text" name="id_ekstra051"  placeholder="Masukkan Id Extrakulikuler" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama_ekstra051">Nama Extrakulikuler:</label>
                            <input type="text" name="nama_ekstra051" id="nama_ekstra051" placeholder="Masukkan Nama Extrakulikuler" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ket051">Keterangan:</label>
                            <input type="text" name="ket051" id="ket051" placeholder="Masukkan Keterangan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="semester051">Semester:</label>
                            <input type="text" name="semester051" id="semester051" placeholder="Masukkan Semester" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="thn_ajaran051">Tahun Ajaran:</label>
                            <input type="text" name="thn_ajaran051" id="thn_ajaran051" placeholder="Masukkan Tahun Ajaran" class="form-control">
                        </div>
                        <div class="card-footer">
                            <input type="submit" name="tambah" class="btn btn-primary" value="Simpan">
                            <a href="index.php?page=ekstra2511500051" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>