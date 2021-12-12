<?php include "koneksimysql.php";?>
<?php 

    $conn->query("delete from guru where id='".$_GET['id']."'");
    header("location:masterguru.php");
?>