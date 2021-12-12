<?php include "koneksimysql.php";?>
<?php 
if($_POST['id']=="0"){
    $conn->query("insert into guru(nama) values('".$_POST['nama']."')");
}else{
    $conn->query("update guru set nama='".$_POST['nama']."' where id='".$_POST['id']."'");
}
    header("location:masterguru.php");
?>