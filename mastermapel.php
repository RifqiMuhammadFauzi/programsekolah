<?php include "header.php";?>
<?php 
require 'function.php';
?>
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
                                <li class="nav-item active">
                                    <a class="btn btn-info" href="tambahmapel.php">Tambah</a>
                                </li>
                            </ul>
                        </div>
                </div>
            </nav>
            <?php $menu="masterdata";?>
            <?php include "koneksimysql.php";?>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama Mata Pelajaran</th>
                            <th width="150px">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql=$conn->query("select * from mapel");
                            while($rs=$sql->fetch_object()){
                        ?>
                            <tr>
                                <td><?php echo $rs->nama;?></td>
                                <td><a class="btn btn-success btn-sm" href="tambahmapel.php?id=<?php echo $rs->Id;?>">Ubah</a>
                                <a class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?');" href="hapusmapel.php?id=<?php echo $rs->Id;?>">Hapus</td>
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