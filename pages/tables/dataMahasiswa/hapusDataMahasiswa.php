<?php
include 'pages/connect/db_koneksi.php';
$nim = $_GET['nim'];
$sql = "DELETE FROM tb_mahasiswa WHERE nim='$nim'";
$result = mysqli_query($conn, $sql);
if ($result) {

    echo "
            <script>
                alert('Data Berhasil Dihapus!');
                document.location.href = '?page=DataMahasiswa'
            </script>
       ";
} else {
    echo "
             <script>
                   alert('Data Gagal Dihapus!');
                   document.location.href = '?page=DataMahasiswa'
             </script>
       ";
}
?>

