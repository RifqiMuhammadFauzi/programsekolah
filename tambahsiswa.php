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
                                    <a class="btn btn-info" href="mastersiswa.php">Lihat Data</a>
                                </li>
                            </ul>
                        </div>
                </div>
            </nav>
            <?php include "koneksimysql.php";?>
            <?php $menu="masterdata";?>
            <?php 
                if(isset($_GET['nis'])){
                    $nislama=$_GET['nis'];
                }else{
                    $nislama="";
                }
                
            ?>
            <?php 
                $nis="";
                $nama="";
                $kelas="";
                $jeniskelamin="";
                $sql=$conn->query("select * from siswa where nis='".$nislama."'");
                while($rs=$sql->fetch_object()){
                    $nis=$rs->nis;
                    $nama=$rs->nama;
                    $kelas=$rs->kelas;
                    $jeniskelamin=$rs->jeniskelamin;
                }
            ?>
            <h4><?php if($nislama!=""){echo"Edit";}else{echo"Tambah";}?> Master Siswa</h4>
        <div class="col-6">
            <form action="simpansiswa.php" method="POST">
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="text" class="form-control" id="nis" name="nis" required value="<?php echo $nis;?>" placeholder="NIS">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required value="<?php echo $nama;?>" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" required value="<?php echo $kelas;?>" placeholder="Kelas">
                    </div>
                    <div class="form-group">
                        <label for="jeniskelamin">Jenis Kealmin</label>
                        <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin" required value="<?php echo $jeniskelamin;?>" placeholder="Jenis Kelamin">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php include "footer.php";?>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>