<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">             
                        <div class="card-body">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                            Create Data Mahasiswa
                          </button>
                        </div>          
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- ./row -->
                </div><!-- /.container-fluid -->
                <div class="modal fade" id="modal-primary">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content"style="background-color: #52585f; color:#c2c7d0; border-radius: 1rem;">
                      <div class="modal-header">
                        <h4 class="modal-title">Primary Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <form action="?page=addDataMahasiswa" method="POST" enctype="multipart/form-data">
                          <div class="card-body">
                              <div class="form-group dpy-flex">
                                  <div class="form-group width-25 pr-3">
                                    <label for="inputName">NIM</label>
                                    <input  name="nim" 
                                            type="text" 
                                            class="form-control" 
                                            id="nim" maxlength="18" 
                                            minlength="4" 
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="NIM" require/>
                                  </div>                          
                                  <div class="form-group width-25 pr-3">
                                    <label for="inputName">Nama Mahasiswa</label>
                                    <input  name="nama_mahasiswa" 
                                            type="text" 
                                            class="form-control" 
                                            id="nama_mahasiswa"
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="Nama Mahasiswa" require/>
                                  </div>
                                  <div class="form-group width-25 pr-3">
                                    <label for="inputName">Program Studi</label>
                                        <select name="program_studi" type="text" class="form-control input-rounded" id="program_studi" required>
                                                <option value="">-Pilih-</option>
                                                <option value="Islam">Teknik Informatika</option>
                                                <option value="Teknik Industri">Teknik Industri</option>
                                        </select>
                                  </div>
                                  <div class="form-group width-25 pr-3">
                                    <label for="inputName">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" type="text" class="form-control input-rounded" id="jenis_kelamin" required>
                                                <option value="">-Pilih-</option>
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                        </select>
                                  </div>
                              </div>
                              
                              <div class="form-group dpy-flex">
                                  <div class="form-group width-25 pr-3">
                                    <label for="inputName">Tanggal Lahir</label>
                                    <input  name="tgl_lahir" 
                                            type="date" 
                                            class="form-control" 
                                            id="tgl_lahir"
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="Tanggal Lahir" require/>
                                  </div>
                                  <div class="form-group width-25 pr-3">
                                    <label for="inputName">Agama</label>
                                        <select name="agama" type="text" class="form-control input-rounded" id="agama" required>
                                                <option value="">-Pilih-</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Protestan">Protestan</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                  <div class="form-group width-25 pr-3">
                                    <label for="inputName">No Hp</label>
                                    <input  name="no_hp" 
                                            type="text" 
                                            class="form-control" 
                                            id="no_hp"
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="No Hp" require/>
                                  </div>
                                  <div class="form-group width-25 pr-3">
                                    <label for="inputName">Nik</label>
                                    <input  name="nik" 
                                            type="text" 
                                            class="form-control" 
                                            id="nik" 
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="NIK" require/>
                                  </div>
                              </div>

                              <div class="form-group dpy-flex">
                                  <div class="form-group width-25 pr-3">
                                    <label for="inputName">Email Pribadi</label>
                                    <input  name="email_pribadi" 
                                            type="text" 
                                            class="form-control" 
                                            id="email_pribadi"
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="Email Pribadi" require/>
                                  </div>
                                  <div class="form-group width-25 pr-3">
                                    <label for="inputName">Email Uis</label>
                                    <input  name="email_uis" 
                                            type="text" 
                                            class="form-control" 
                                            id="email_uis" 
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="Email Uis" require/>
                                  </div>
                                  <div class="form-group width-25 pr-3">
                                    <label for="inputName">Id kelas</label>
                                    <input  name="id_kelas" 
                                            type="text" 
                                            class="form-control" 
                                            id="id_kelas" 
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="Id Kelas" require/>
                                  </div>
                                  <div class="form-group width-25 pr-3">
                                    <label for="inputName">Nama Kelas</label>
                                    <input  name="nama_kelas" 
                                            type="text" 
                                            class="form-control" 
                                            id="nama_kelas" 
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="Nama Kelas" require/>
                                  </div>
                              </div>

                              <div class="form-group dpy-flex">
                                  <div class="form-group width-25 pr-3">
                                    <label for="inputName">Nama Dosen</label>
                                    <input  name="nama_dosen" 
                                            type="text" 
                                            class="form-control" 
                                            id="nama_dosen" 
                                            onkeypress="return onlyNumber(event)" 
                                            placeholder="Nama Dosen" require/>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="modal-footer justify-content-between">
                        <button type="reset" class="btn btn-outline-light" >Reset</button>
                        <button type="submit" class="btn btn-outline-light btn-primary">Save changes</button>
                      </div>
                      </form>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <section class="content">
                  <div class="container-fluid">
                      <form action="">
                          <div class="row">
                          <div class="col-md-5 offset-md-1">                              
                              </div>
                              <div class="col-md-5 offset-md-1">
                                  <div class="">
                                      <div class="input-group input-group-lg">
                                          <input type="search" class="form-control form-control-lg" placeholder="Type your keywords here" >
                                          <div class="input-group-append">
                                              <button type="submit" class="btn btn-lg btn-default">
                                                  <i class="fa fa-search"></i>
                                              </button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
                </section>
              </div>
              <!-- /.card-header -->
              <div class="tableScroll1 dpy-contents">
                <div class="card-body tableScroll2">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>NIM</th>
                      <th>Nama Mahasiswa</th>
                      <th>Program Studi</th>
                      <th>Nama Kelas</th>
                      <th>Email Uis</th>
                      <th>ACTION</th>
                    </tr>
                    </thead>
                    <?php
                        // include "../config/conn.php";
                        $sql = mysqli_query($conn, "SELECT * FROM tb_mahasiswa");
                         while ($row = mysqli_fetch_array($sql)) {
                         ?>
                    <tbody>
                    <tr style="cursor: pointer">
                      <td><?= $row['nim']; ?></td>
                      <td><?= $row['nama_mahasiswa']; ?></td>
                      <td><?= $row['program_studi']; ?></td>
                      <td><?= $row['nama_kelas']; ?></td>
                      <td><?= $row['email_uis']; ?></td>
                      <td class="d-flex">
                        <a  class="btn mr-3 btn-outline-primary btn-sm " href="?page=detailDataMahasiswa&nim=<?= $row['nim']; ?>">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a  class="btn mr-3 btn-outline-warning btn-sm " href="?page=editDataMahasiswa&nim=<?= $row['nim']; ?>">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn  btn-outline-danger btn-sm text-danger" href="?page=hapusDataMahasiswa&nim=<?= $row['nim']; ?>" >
                            <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    <?php  } ?>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>NIM</th>
                      <th>Nama Mahasiswa</th>
                      <th>Program Studi</th>
                      <th>Nama Kelas</th>
                      <th>Email Uis</th>
                      <th>Update</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../../plugins/jszip/jszip.min.js"></script>
<script src="../../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../../../plugins/select2/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
<script>
    $(function () {
      $('.select2').select2()
    });
</script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>