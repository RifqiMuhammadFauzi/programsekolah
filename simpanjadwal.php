<?php include "koneksimysql.php"; ?>
<?php
    if($_POST['id']>0){
        $conn->query("update jadwal set hari='".$_POST['hari']."',jam_mulai='".$_POST['jam_mulai']."',jam_selesai='".$_POST['jam_selesai']."',nis='".$_POST['nis']."',id_guru='".$_POST['id_guru']."',id_mapel='".$_POST['id_mapel']."' where id='".$_POST['id']."'");
    }else{
        $conn->query("insert into jadwal(hari,jam_mulai,jam_selesai,nis,id_guru,id_mapel) values('".$_POST['hari']."','".$_POST['jam_mulai']."','".$_POST['jam_selesai']."','".$_POST['nis']."','".$_POST['id_guru']."','".$_POST['id_mapel']."')");
    }

    header("location:jadwal.php")
?>