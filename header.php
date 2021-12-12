<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Program Sekolah</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" style="background: rgb(6, 226, 215);">
            <div class="sidebar-header" style="background: rgb(6, 226, 215);">
                <h3>Program Sekolah</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#masterdata" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="background: rgb(6, 226, 215);">Master Data</a>
                    <ul class="collapse list-unstyled" id="masterdata">
                        <li>
                            <a href="masterkelas.php" style="background: rgb(6, 193, 226);">Kelas</a>
                        </li>
                        <li>
                            <a href="mastermapel.php" style="background: rgb(6, 193, 226);">Mata Pelajaran</a>
                        </li>
                        <li>
                            <a href="masterguru.php" style="background: rgb(6, 193, 226);">Guru</a>
                        </li>
                        <li>
                            <a href="mastersiswa.php" style="background: rgb(6, 193, 226);">Siswa</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="jadwal.php">Jadwal</a>
                </li>
                <li>
                    <a href="absensi.php">Absensi</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" style="background: rgb(6, 226, 215);">Penilaian</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="regular.php" style="background: rgb(6, 193, 226);">Regular</a>
                        </li>
                        <li>
                            <a href="ektrakurikuler.php" style="background: rgb(6, 193, 226);">Ektrakurikuler</a>
                        </li>
                        <li>
                            <a href="praktikum.php" style="background: rgb(6, 193, 226);">Praktikum</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="raport.php">Raport</a>
                </li>
            </ul>
        </nav>