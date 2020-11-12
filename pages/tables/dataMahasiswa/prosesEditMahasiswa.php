<?php
 include 'pages/connect/db_koneksi.php';
 $nim  = $_POST['nim'];
 $nama_mahasiswa  = $_POST['nama_mahasiswa'];
 $program_studi  = $_POST['program_studi'];
 $jenis_kelamin  = $_POST['jenis_kelamin'];
 $tgl_lahir  = $_POST['tgl_lahir'];
 $agama  = $_POST['agama'];
 $no_hp = $_POST['no_hp'];
 $nik  = $_POST['nik'];
 $email_pribadi  = $_POST['email_pribadi'];
 $email_uis  = $_POST['email_uis'];
 $id_kelas  = $_POST['id_kelas'];
 $nama_kelas  = $_POST['nama_kelas'];
 $nama_dosen  = $_POST['nama_dosen'];

 $sql = "UPDATE tb_mahasiswa   SET nama_mahasiswa='$nama_mahasiswa', 
                        program_studi='$program_studi', 
                        nik='$nik', 
                        tgl_lahir='$tgl_lahir', 
                        email_pribadi='$email_pribadi', 
                        no_hp='$no_hp', 
                        jenis_kelamin='$jenis_kelamin', 
                        agama='$agama', 
                        email_uis='$email_uis', 
                        id_kelas='$id_kelas', 
                        nama_kelas='$nama_kelas', 
                        nama_dosen='$nama_dosen' WHERE nim='$nim'";
 $result = mysqli_query($conn, $sql);
 if ($result) {

 echo "
            <script>
                alert('Data Berhasil Diubah!');
                document.location.href = '?page=DataMahasiswa'
            </script>
       ";
}else{
 echo "
             <script>
                alert('Data Gagal Diubah!');
                document.location.href = '?page=DataMahasiswa'
             </script>
       ";
}
 mysqli_close($conn);
?>
