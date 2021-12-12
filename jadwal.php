<?php include "header.php";?>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="btn btn-info" href="tambahjadwal.php">Tambah</a>
                                </li>
                            </ul>
                        </div>
                </div>
            </nav>
            <?php $menu="jadwal";?>
            <?php include "koneksimysql.php";?>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Hari</th>
                            <th>Jam</th>
                            <th>Kelas</th>
                            <th>NIS</th>
                            <th>Mapel</th>
                            <th>Guru</th>
                            <th width="150px">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql=$conn->query("select j.*,s.*,g.nama as namaguru,m.nama as namamapel 
                            from jadwal j 
                            join siswa s on s.nis=j.nis
                            join guru g on g.id=j.id_guru
                            join mapel m on m.id=j.id_mapel");
                            while($rs=$sql->fetch_object()){
                        ?>
                            <tr>
                                <td><?php echo $rs->hari;?></td>
                                <td><?php echo $rs->jam_mulai;?>
                                -    <?php echo $rs->jam_selesai;?></td>
                                <td><?php echo $rs->kelas;?></td>
                                <td><?php echo $rs->nis;?></td>
                                <td><?php echo $rs->namamapel;?></td>
                                <td><?php echo $rs->namaguru;?></td>
                                <td><a class="btn btn-success btn-sm" href="tambahjadwal.php?id=<?php echo $rs->id;?>">Ubah</a>
                                <a class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?');" href="hapusjadwal.php?id=<?php echo $rs->id;?>">Hapus</td>
                            </tr>

                        <?php
                            }    
                        ?>
                    </tbody>
            </table>
        </div>
    </div>
    <?php include "footer.php";?>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>