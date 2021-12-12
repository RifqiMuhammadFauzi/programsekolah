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
                                    <a class="btn btn-info" href="mastermapel.php">Lihat Data</a>
                                </li>
                            </ul>
                        </div>
                </div>
            </nav>
            <?php include "koneksimysql.php";?>
            <?php $menu="masterdata";?>
            <?php 
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                }else{
                    $id=0;
                }
                
            ?>
            <?php 
                $nama="";
                $sql=$conn->query("select * from mapel where id='".$id."'");
                while($rs=$sql->fetch_object()){
                    $nama=$rs->nama;
                }
            ?>
            <h4><?php if($id>0){echo"Edit";}else{echo"Tambah";}?> Master Mapel</h4>
        <div class="col-6">
            <form action="simpanmapel.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                    <div class="form-group">
                        <label for="nama">Nama Mapel</label>
                        <input type="text" class="form-control" id="nama" name="nama" required value="<?php echo $nama;?>" placeholder="Nama Mapel">
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