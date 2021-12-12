<?php
    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM mastermapel WHERE id =$id");
        return mysqli_affected_rows($conn);
    }
?>