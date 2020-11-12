<?php
include 'pages/connect/db_koneksi.php';
 $nim  = $_REQUEST['nim'];
 $nama_mahasiswa  = $_REQUEST['nama_mahasiswa'];
 $program_studi  = $_REQUEST['program_studi'];
 $jenis_kelamin  = $_REQUEST['jenis_kelamin'];
 $tgl_lahir  = $_REQUEST['tgl_lahir'];
 $agama  = $_REQUEST['agama'];
 $no_hp = $_REQUEST['no_hp'];
 $nik  = $_REQUEST['nik'];
 $email_pribadi  = $_REQUEST['email_pribadi'];
 $email_uis  = $_REQUEST['email_uis'];
 $id_kelas  = $_REQUEST['id_kelas'];
 $nama_kelas  = $_REQUEST['nama_kelas'];
 $nama_dosen  = $_REQUEST['nama_dosen'];

 $sql = "INSERT INTO tb_mahasiswa ( `nim`, 
                                    `nama_mahasiswa`, 
                                    `program_studi`, 
                                    `jenis_kelamin`, 
                                    `tgl_lahir`, 
                                    `agama`, 
                                    `no_hp`, 
                                    `nik`, 
                                    `email_pribadi`, 
                                    `email_uis`, 
                                    `id_kelas`, 
                                    `nama_kelas`, 
                                    `nama_dosen`,) VALUES (     '$nim', 
                                                                '$nama_mahasiswa', 
                                                                '$program_studi', 
                                                                '$jenis_kelamin', 
                                                                '$tgl_lahir', 
                                                                '$agama', 
                                                                '$no_hp', 
                                                                '$nik', 
                                                                '$email_pribadi', 
                                                                '$email_uis', 
                                                                '$id_kelas', 
                                                                '$nama_kelas', 
                                                                '$nama_dosen')";
 $result = mysqli_query($conn, $sql);
 if ($result) {

 echo "
             <script>
                   alert('Data Berhasil Ditambahkan!');
                   document.location.href = '?page=DataMahasiswa'
             </script>
       ";
}else{
 echo "
             <script>
                   alert('Data Gagal Ditambahkan!');
                   document.location.href = '?page=DataMahasiswa'
             </script>
       ";
}
 mysqli_close($conn);
