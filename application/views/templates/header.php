<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- My CSS -->

  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/css/materialize.min.css" media="screen,projection" />
  
   
  <title><?php echo $judul; ?>
  </title>
</head>

<body>

    <div class="navbar-fixed" >
        <nav style="background-color: darkslategrey;">
            <div class="nav-wrapper container" style ="background-color: darkslategrey;">
                <a href="<?= base_url(); ?>home" class="brand-logo center"><i class="material-icons">stars</i>Sintetic Store</a>
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="topnav left hide-on-med-and-down">
                    <li><a href="<?= base_url(); ?>databarang">Data Barang</a></li>
                    <li><a href="<?= base_url(); ?>datapenjualan">Data Penjualan</a></li>

                </ul>
            </div>
        </nav>
    </div>
    <ul id="slide-out" class="sidenav">
    <li><a href="<?= base_url(); ?>home">Home</a></li>
       <li><a href="<?= base_url(); ?>databarang">Data Barang</a></li>
        <li><a href="<?= base_url(); ?>datapenjualan">Data Penjualan</a></li>
    </ul>
  