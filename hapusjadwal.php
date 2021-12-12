<?php include "koneksimysql.php";?>
<?php 

    $conn->query("delete from jadwal where id='".$_GET['id']."'");
    header("location:jadwal.php");
?>