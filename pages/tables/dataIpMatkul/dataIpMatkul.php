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
                  <div class="modal-dialog">
                    <div class="modal-content bg-primary">
                      <div class="modal-header">
                        <h4 class="modal-title">Primary Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <div class="card card-primary">
                              <div class="card-header">
                                <h3 class="card-title">General</h3>

                                <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                  </button>
                                </div>
                              </div>
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="inputName">Project Name</label>
                                  <input type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                  <label for="inputDescription">Project Description</label>
                                  <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="inputStatus">Status</label>
                                  <select id="inputStatus" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    <option>On Hold</option>
                                    <option>Canceled</option>
                                    <option>Success</option>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="inputClientCompany">Client Company</label>
                                  <input type="text" id="inputClientCompany" class="form-control">
                                </div>
                                <div class="form-group">
                                  <label for="inputProjectLeader">Project Leader</label>
                                  <input type="text" id="inputProjectLeader" class="form-control">
                                </div>
                              </div>
                              <!-- /.card-body -->
                            </div>
                      </div>
                      <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline-light">Save changes</button>
                      </div>
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
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                    <td><button type="button" class="btn btn-block btn-outline-warning btn-sm"> <i class="nav-icon fas fa-edit" /> </button></td>
                    <td><button type="button" class="btn btn-block btn-outline-danger btn-sm"><i class="nav-icon fas fa-trash" />  </button></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                    <td><button type="button" class="btn btn-block btn-outline-warning btn-sm"> <i class="nav-icon fas fa-edit" /> </button></td>
                    <td><button type="button" class="btn btn-block btn-outline-danger btn-sm"><i class="nav-icon fas fa-trash" />  </button></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>A</td>
                    <td><button type="button" class="btn btn-block btn-outline-warning btn-sm"> <i class="nav-icon fas fa-edit" /> </button></td>
                    <td><button type="button" class="btn btn-block btn-outline-danger btn-sm"><i class="nav-icon fas fa-trash" />  </button></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 6
                    </td>
                    <td>Win 98+</td>
                    <td>6</td>
                    <td>A</td>
                    <td><button type="button" class="btn btn-block btn-outline-warning btn-sm"> <i class="nav-icon fas fa-edit" /></button></td>
                    <td><button type="button" class="btn btn-block btn-outline-danger btn-sm"><i class="nav-icon fas fa-trash" />  </button></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td>7</td>
                    <td>A</td>
                    <td><button type="button" class="btn btn-block btn-outline-warning btn-sm"> <i class="nav-icon fas fa-edit" /></button></td>
                    <td><button type="button" class="btn btn-block btn-outline-danger btn-sm"><i class="nav-icon fas fa-trash" />  </button></td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>AOL browser (AOL desktop)</td>
                    <td>Win XP</td>
                    <td>6</td>
                    <td>A</td>
                    <td><button type="button" class="btn btn-block btn-outline-warning btn-sm"> <i class="nav-icon fas fa-edit" /></button></td>
                    <td><button type="button" class="btn btn-block btn-outline-danger btn-sm"><i class="nav-icon fas fa-trash" />  </button></td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.7</td>
                    <td>A</td>
                    <td><button type="button" class="btn btn-block btn-outline-warning btn-sm"> <i class="nav-icon fas fa-edit" /></button></td>
                    <td><button type="button" class="btn btn-block btn-outline-danger btn-sm"><i class="nav-icon fas fa-trash" />  </button></td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.5</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                    <td><button type="button" class="btn btn-block btn-outline-warning btn-sm"> <i class="nav-icon fas fa-edit" /></button></td>
                    <td><button type="button" class="btn btn-block btn-outline-danger btn-sm"><i class="nav-icon fas fa-trash" />  </button></td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 2.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                    <td><button type="button" class="btn btn-block btn-outline-warning btn-sm"> <i class="nav-icon fas fa-edit" /></button></td>
                    <td><button type="button" class="btn btn-block btn-outline-danger btn-sm"><i class="nav-icon fas fa-trash" />  </button></td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 3.0</td>
                    <td>Win 2k+ / OSX.3+</td>
                    <td>1.9</td>
                    <td>A</td>
                    <td><button type="button" class="btn btn-block btn-outline-warning btn-sm"> <i class="nav-icon fas fa-edit" /></button></td>
                    <td><button type="button" class="btn btn-block btn-outline-danger btn-sm"><i class="nav-icon fas fa-trash" />  </button></td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                  </tfoot>
                </table>
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