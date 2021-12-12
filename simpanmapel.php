<?php include "koneksimysql.php";?>
<?php 
if($_POST['id']=="0"){
    $conn->query("insert into mapel(nama) values('".$_POST['nama']."')");
}else{
    $conn->query("update mapel set nama='".$_POST['nama']."' where id='".$_POST['id']."'");
}
    header("location:mastermapel.php");
?>