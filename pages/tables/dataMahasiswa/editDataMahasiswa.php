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
            <h1 class="m-0">Edit Mahasiswa</h1>
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
    <form action="?page=prosesEditMahasiswa" method="POST">
        <div class="row">
            <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Edit Mahasiswa</h3>
                        </div>
                        <div class="d-flex">
                            <div class="">
                                <div class="card-body">
                                    <strong >NIM</strong>
                                    <input  name="nim" 
                                            value="<?= $row['nim']; ?>" 
                                            type="text" 
                                            class="form-control input-rounded" 
                                            id="nim" 
                                            maxlength="18" 
                                            minlength="4" 
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="NIM" required readonly/>
                                </div>
                                <div class="card-body">
                                    <strong>Nama Mahasiswa</strong>
                                    <input  name="nama_mahasiswa" 
                                            value="<?= $row['nama_mahasiswa']; ?>" 
                                            type="text" 
                                            class="form-control input-rounded" 
                                            id="nama_mahasiswa" 
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="Nama Mahasiswa" required/>
                                </div>
                            </div>
                            <div class="">
                                <div class="card-body">
                                    <strong>Program Studi</strong>
                                    <input  name="program_studi" 
                                            value="<?= $row['program_studi']; ?>" 
                                            type="text" 
                                            class="form-control input-rounded" 
                                            id="program_studi" 
                                            maxlength="18" 
                                            minlength="4" 
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="Program Studi" required/>
                                </div>
                                <div class="card-body">
                                    <strong>Jenis Kelamin</strong>
                                    <?php $jenis_kelamin = $row['jenis_kelamin']; ?>
                                    <select name="jenis_kelamin" type="text" class="form-control input-rounded" id="jenis_kelamin" required>
                                        <option value="Laki-Laki" <?php if($jenis_kelamin == "Laki-Laki"){echo "SELECTED";} ?>>Laki-Laki</option>
                                        <option value="Parempuan" <?php if($jenis_kelamin == "Parempuan"){echo "SELECTED";} ?>>Parempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <div class="card-body">
                                    <strong>Tanggal Lahir</strong>
                                    <input  name="tgl_lahir" 
                                            value="<?= $row['tgl_lahir']; ?>" 
                                            type="text" 
                                            class="form-control input-rounded" 
                                            id="tgl_lahir"  
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="Tanggal Lahir" required/>
                                </div>
                                <div class="card-body">
                                    <strong>Agama</strong>
                                    <?php $agama = $row['agama']; ?>
                                            <select name="agama" type="text" class="form-control input-rounded" id="agama" required>
                                                <option value="Islam" <?php if($agama == "Islam"){echo "SELECTED";} ?>>Islam</option>
                                                <option value="Protestan" <?php if($agama == "Protestan"){echo "SELECTED";} ?>>Protestan</option>
                                                <option value="Katolik" <?php if($agama == "Katolik"){echo "SELECTED";} ?>>Katolik</option>
                                                <option value="Buddha" <?php if($agama == "Buddha"){echo "SELECTED";} ?>>Buddha</option>
                                                <option value="Hindu" <?php if($agama == "Hindu"){echo "SELECTED";} ?>>Hindu</option>
                                                <option value="Konghucu" <?php if($agama == "Konghucu"){echo "SELECTED";} ?>>Konghucu</option>
                                            </select>
                                </div>
                            </div>
                            <div class="">
                                <div class="card-body">
                                    <strong>No hp</strong>
                                    <input  name="no_hp" 
                                            value="<?= $row['no_hp']; ?>" 
                                            type="text" 
                                            class="form-control input-rounded" 
                                            id="no_hp" 
                                            maxlength="18" 
                                            minlength="4" 
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="No hp" required/>
                                </div>
                                <div class="card-body">
                                    <strong>NIK</strong>
                                    <input  name="nik" 
                                            value="<?= $row['nik']; ?>" 
                                            type="text" 
                                            class="form-control input-rounded" 
                                            id="nik" 
                                            maxlength="18" 
                                            minlength="4" 
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="NIK" required/>
                                </div>
                            </div>
                            <div class="">
                                <div class="card-body">
                                    <strong>Email Pribadi</strong>
                                    <input  name="email_pribadi" 
                                            value="<?= $row['email_pribadi']; ?>" 
                                            type="text" 
                                            class="form-control input-rounded" 
                                            id="email_pribadi" 
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="Email Pribadi" required/>
                                </div>
                                <div class="card-body">
                                    <strong>Email UIS</strong>
                                    <input  name="email_uis" 
                                            value="<?= $row['email_uis']; ?>" 
                                            type="text" 
                                            class="form-control input-rounded" 
                                            id="email_uis" 
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="Email UIS" required/>
                                </div>
                            </div>
                            <div class="">
                            <div class="card-body">
                                    <strong>Id Kelas</strong>
                                    <input  name="id_kelas" 
                                            value="<?= $row['id_kelas']; ?>" 
                                            type="text" 
                                            class="form-control input-rounded" 
                                            id="id_kelas" 
                                            maxlength="18" 
                                            minlength="4" 
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="Id Kelas" required readonly/>
                                </div>
                                <div class="card-body">
                                    <strong>Nama Kelas</strong>
                                    <input  name="nama_kelas" 
                                            value="<?= $row['nama_kelas']; ?>" 
                                            type="text" 
                                            class="form-control input-rounded" 
                                            id="nama_kelas" 
                                            maxlength="18" 
                                            minlength="4" 
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="Nama Kelas" required readonly/>
                                </div>
                                <div class="card-body">
                                    <strong>Nama Dosen</strong>
                                    <input  name="nama_dosen" 
                                            value="<?= $row['nama_dosen']; ?>" 
                                            type="text" 
                                            class="form-control input-rounded" 
                                            id="nama_dosen" 
                                            maxlength="18" 
                                            minlength="4" 
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="Nama Dosen" required readonly/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="row">
            <div class="col-md-2">
            <a href="?page=DataMahasiswa" class="btn btn-block btn-outline-primary">Cencel</a>
            </div>
            <div class="col-md-8"></div>
            <div class="col-md-2">
                <button type="submit"class="btn btn-block btn-outline-warning">Save</button>
            </div>
            
      </div>
      </form>
    </section>
  </div>