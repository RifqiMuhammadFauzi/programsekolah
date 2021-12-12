<?php include "koneksimysql.php";?>
<?php 
    $nislama="";
    $sql=$conn->query("select * from siswa where nis='".$_POST['nis']."'");
    while($rs=$sql->fetch_object()){
        $nislama=$rs->nis;
    }
if($nislama==""){
    $conn->query("insert into siswa(nis,nama,kelas,jeniskelamin) values('".$_POST['nis']."','".$_POST['nama']."','".$_POST['kelas']."','".$_POST['jeniskelamin']."')");
}else{
    $conn->query("update siswa set nama='".$_POST['nama']."',kelas='".$_POST['kelas']."',jeniskelamin='".$_POST['jeniskelamin']."' where nis='".$_POST['nis']."'");
}
    header("location:mastersiswa.php");
?>