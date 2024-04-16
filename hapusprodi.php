<?php
require 'koneksi.php';

$id =$_GET['Id_Prodi'];
$query = "DELETE FROM prodi WHERE Id_Prodi='$id'";

mysqli_query($conn, $query);

if (mysqli_affected_rows($conn) > 0) {
    echo"
    <script>
    alert('Data berhasil dihapus');
    document.location.href='prodi.php';
    </script>
";

}else {
    echo "
    <script> 
    alert ('Data gagal dihapus');
    document.location.href='tambahprodi.php'
    </script>
    ";

    echo mysqli_error($conn);
};
?>