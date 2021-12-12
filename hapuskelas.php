<?php include "koneksimysql.php";?>
<?php 

    $conn->query("delete from kelas where id='".$_GET['id']."'");
    header("location:masterkelas.php");
?>