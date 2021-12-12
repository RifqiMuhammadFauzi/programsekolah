<?php include "koneksimysql.php";?>
<?php 

    $conn->query("delete from mapel where id='".$_GET['id']."'");
    header("location:mastermapel.php");
?>