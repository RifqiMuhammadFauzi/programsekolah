<?php include "koneksimysql.php";?>
<?php 
if($_POST['id']=="0"){
    $conn->query("insert into kelas(nama) values('".$_POST['nama']."')");
}else{
    $conn->query("update kelas set nama='".$_POST['nama']."' where id='".$_POST['id']."'");
}
    header("location:masterkelas.php");
?>