<?php 
    session_start();

    if(!isset($_SESSION['susername'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin Kota Surakarta</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style4.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>


    <style>
    .modal-header {
        background: #34A6D8;
        text-align: center;
        color: #fff;
    }
    </style>
</head>

<body>
    <?php
	    include "../function.php";
        $obTransportasi = new transportasi;
        $qry = $obTransportasi->tampil_data();
    ?>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>ADMINISTRATOR</h3>
                <strong><img src="images/admin.png" width="40px"></strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="index.php">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-database    "></i>
                        Data
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="data_transportasi.php">Transportasi</a>
                        </li>
                        <li>
                            <a href="data_spbu.php">SPBU</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="logout.php" class="article btn-danger">Keluar</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <a href="../Peta_TitikTransportasi" target="_blank" class="btn btn-primary btn-sm"> <i class="fa fa-eye" aria-hidden="true"></i>
                                &nbsp; Lihat Peta </a>
                        </ul>
                    </div>
                </div>
            </nav>

            <button type="button" class="btn btn-success btn-sm mb-2" data-toggle="modal" data-target="#ModalAdd">
                Tambah Data
            </button>
            <table class="table table-hover border-bottom">
                <thead>
                    <tr class="table-primary">
                        <th width="60px">NO. </TH>
                        <th width="120px">KATEGORI </th>
                        <th width="190px">NAMA </th>
                        <th>ALAMAT </th>
                        <th width="150px">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            //Jika data tidak ada
            $no=1;
            while($row=$obTransportasi->fetch($qry)){
            ?>
                    <tr>
                        <td width="60px"><?php echo $no ?></td>
                        <td width="120px"><?php echo $row ["Kategori"] ?></td>
                        <td width="190px"><?php echo $row ["Nama"] ?></td>
                        <td><?php echo $row ["Alamat"] ?></td>
                        <td width="150px">
                            <a class="btn btn-outline-primary btn-sm m-1"
                                data-target="#ModalEdit<?php echo $row["Id"];?>" data-toggle="modal"><i
                                    class="fas fa-edit"></i></a>
                            <a class="btn btn-outline-danger btn-sm m-1"
                                href="hapusData.php?qid=<?php echo $row['Id'] ?>"
                                onclick="return confirm('Yakin Hapus?')"><i class="fas fa-trash    "></i></a>
                        </td>
                    </tr>


                    <div class="modal fade" id="ModalEdit<?php echo $row["Id"];?>"" tabindex=" -1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">


                                    <div class="container-fluid">

                                        <form action="save_editData.php?qid=<?php echo $row['Id'] ?>" method="post"
                                            class="col-sm-9 m-auto">

                                            <div class="form-group">
                                                <input class="form-control" type="hidden" name="fid" id="fid" readonly>
                                            </div>

                                            <div class="form-group">
                                                <label for="fnama">NAMA :</label>
                                                <input class="form-control" type="text" name="fnama" id="fnama"
                                                    value="<?php echo $row['Nama']; ?>" require>
                                            </div>

                                            <div class="form-group">
                                                <label for="fkota">KATEGORI :</label>
                                                <select class="form-control" name="fkat" id="fkat">
                                                    <?php
								$arrkat = array('Halte','Halte-BST','Terminal','Stasiun');
								sort($arrkat);
								foreach ($arrkat as $kategori) {						//print arary kota untuk pilihannya
									echo "<option value=$kategori ";					//pembuka option
									if($kategori==$row['Kategori']){echo "selected> $kategori </option>";}		//membuat value default dari database
									else{echo "> $kategori </option>";};						//closing option
								}
							?>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="falamat">ALAMAT:</label>
                                                <input class="form-control" type="text" name="falamat" id="falamat"
                                                    value="<?php echo $row['Alamat']; ?>" require>
                                            </div>

                                            <div class="form-group">
                                                <label for="flat">LATTITUDE :</label>
                                                <input class="form-control" type="text" name="flat" id="flat"
                                                    value="<?php echo $row['Lat']; ?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="flng">LONGITUDE :</label>
                                                <input class="form-control" type="text" name="flng" id="flng"
                                                    value="<?php echo $row['Lng']; ?>" required>
                                            </div>

                                            <div class="footer-card">
                                                <a href="data_transportasi.php"
                                                    class="btn btn-md btn-secondary col-4  btn-cancel">Cancel</a>
                                                <button type="submit" name="submit"
                                                    class="btn button col-4 btn-primary">submit</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MODAL Edit DATA -->





                    <?php
                $no++;
            };
            ?>
                </tbody>
            </table>

        </div>
    </div>



    <!-- MODAL ADD DATA -->
    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <form action="save_addData.php" method="post" class="col-sm-10 m-auto">

                        <div class="form-group">
                            <label for="fnama">NAMA :</label>
                            <input class="form-control" type="text" name="fnama" id="fnama" required>
                        </div>

                        <div class="form-group">
                            <label for="fkota">KATEGORI :</label>
                            <select class="form-control" name="fkat" id="fkat">
                                <?php
              $arrkat = array('Halte','Halte-BST','Terminal','Stasiun');
              sort($arrkat);
              foreach ($arrkat as $kategori) {						//print arary kota untuk pilihannya
                echo "<option value=$kategori ";					//pembuka option
                if($kategori==$row['Kategori']){}		//membuat value default dari database
                else{echo "> $kategori </option>";};						//closing option
              }
            ?>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="falamat">ALAMAT :</label>
                            <input class="form-control" type="text" name="falamat" id="falamat" required>
                        </div>

                        <div class="form-group">
                            <label for="flat">LATTITUDE :</label>
                            <input class="form-control" type="text" name="flat" id="flat" required>
                        </div>

                        <div class="form-group">
                            <label for="flng">LONGITUDE :</label>
                            <input class="form-control" type="text" name="flng" id="flng" required>
                        </div>

                        <div class="footer-card">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-sm"
                                    data-dismiss="modal">Close</button>
                                <button type="submit" name="submit"
                                    class="btn button col-4 btn-sm btn-primary">submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL ADD DATA -->


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
    </script>
</body>

</html>