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
                                    <a class="btn btn-info" href="jadwal.php">Lihat Data</a>
                                </li>
                            </ul>
                    </div>
                </div>
            </nav>
            <?php include "koneksimysql.php";?>
            <?php $menu="jadwal";?>
            <?php 
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                }else{
                    $id=0;
                }
                
            ?>
            <?php 
                $hari="";
                $jam_mulai="";
                $jam_selesai="";
                $nis="";
                $id_guru="";
                $id_mapel="";
                $sql=$conn->query("select * from jadwal where id='".$id."'");
                while($rs=$sql->fetch_object()){
                    $hari=$rs->hari;
                    $jam_mulai=$rs->jam_mulai;
                    $jam_selesai=$rs->jam_selesai;
                    $nis=$rs->nis;
                    $id_guru=$rs->id_guru;
                    $id_mapel=$rs->id_mapel;
                }
            ?>
            <h4><?php if($id>0){echo"Edit";}else{echo"Tambah";}?> Master Jadwal</h4>
        <div class="col-6">
            <form action="simpanjadwal.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id;?>">
                    <div class="form-group">
                        <label for="hari">Hari</label>
                        <input type="text" class="form-control" id="hari" name="hari" required value="<?php echo $hari;?>" placeholder="Hari">
                    </div>
                    <div class="form-group">
                        <label for="jam_mulai">Jam Mulai</label>
                        <input type="text" class="form-control" id="jam_mulai" name="jam_mulai" required value="<?php echo $jam_mulai;?>" placeholder="Jam Mulai">
                    </div>
                    <div class="form-group">
                        <label for="jam_selesai">Jam Selesai</label>
                        <input type="text" class="form-control" id="jam_selesai" name="jam_selesai" required value="<?php echo $jam_selesai;?>" placeholder="Jam Selesai">
                    </div>
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <select name="nis" id="nis" class="form-control" required value="<?php echo $nis;?>">
                            <?php 
                                $sql=$conn->query("select * from siswa");
                                while($rs=$sql->fetch_object()){
                            ?>
                        <option value="<?php echo $rs->nis;?>"<?php if($nis==$rs->nis){echo "selected";}?>><?php echo $rs->nis." ".$rs->nama;?></option>
                            <?php } ?>
            </select>
                    </div>
                    <div class="form-group">
                        <label for="id_guru">Guru</label>
                        <select name="id_guru" id="id_guru" required class="form-control" <?php echo $id_guru;?>>
                            <?php 
                                $sql=$conn->query("select * from guru");
                                while($rs=$sql->fetch_object()){
                            ?>
                        <option value="<?php echo $rs->Id;?>"<?php if($id_guru==$rs->Id){echo "selected";}?>><?php echo $rs->nama;?></option>
                            <?php } ?>
            </select>
                    </div>
                    <div class="form-group">
                        <label for="id_mapel">Mapel</label>
                        <select name="id_mapel" id="id_mapel" required class="form-control" <?php echo $id_mapel;?>>
                            <?php 
                                $sql=$conn->query("select * from mapel");
                                while($rs=$sql->fetch_object()){
                            ?>
                        <option value="<?php echo $rs->Id;?>"<?php if($id_mapel==$rs->Id){echo "selected";}?>><?php echo $rs->nama;?></option>
                            <?php } ?>
            </select>
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