<?php
        // include "../config/conn.php"; 
        $nim = $_GET["nim"];
        $sql = "SELECT * FROM tb_mahasiswa WHERE nim='$nim'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query)
        ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Mahasiswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Detail</h3>
                        </div>
                        <div class="d-flex">
                            <div class="">
                                <div class="card-body">
                                    <strong >NIM</strong>
                                <p class="text-muted"><?= $row['nim']; ?></p>
                                </div>
                                <div class="card-body">
                                    <strong>Nama Mahasiswa</strong>
                                <p class="text-muted"><?= $row['nama_mahasiswa']; ?></p>
                                </div>
                            </div>
                            <div class="">
                                <div class="card-body">
                                    <strong>Program Studi</strong>
                                <p class="text-muted"><?= $row['program_studi']; ?></p>
                                </div>
                                <div class="card-body">
                                    <strong>Jenis Kelamin</strong>
                                <p class="text-muted"><?= $row['jenis_kelamin']; ?></p>
                                </div>
                            </div>
                            <div class="">
                                <div class="card-body">
                                    <strong>Tanggal Lahir</strong>
                                <p class="text-muted"><?= $row['tgl_lahir']; ?></p>
                                </div>
                                <div class="card-body">
                                    <strong>Agama</strong>
                                <p class="text-muted"><?= $row['agama']; ?></p>
                                </div>
                            </div>
                            <div class="">
                                <div class="card-body">
                                    <strong>No hp</strong>
                                <p class="text-muted"><?= $row['no_hp']; ?></p>
                                </div>
                                <div class="card-body">
                                    <strong>NIK</strong>
                                <p class="text-muted"><?= $row['nik']; ?></p>
                                </div>
                            </div>
                            <div class="">
                                <div class="card-body">
                                    <strong>Email Pribadi</strong>
                                <p class="text-muted"><?= $row['email_pribadi']; ?></p>
                                </div>
                                <div class="card-body">
                                    <strong>Email UIS</strong>
                                <p class="text-muted"><?= $row['email_uis']; ?></p>
                                </div>
                            </div>
                            <div class="">
                                <div class="card-body">
                                    <strong>Nama Kelas</strong>
                                <p class="text-muted"><?= $row['nama_kelas']; ?></p>
                                </div>
                                <div class="card-body">
                                    <strong>Nama Dosen</strong>
                                <p class="text-muted"><?= $row['nama_dosen']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="row">
            <div class="col-md-10">
            </div>
            <div class="col-md-2">
                <a href="?page=DataMahasiswa" class="btn btn-block btn-outline-primary">Back</a>
            </div>
      </div>
    </section>
  </div>