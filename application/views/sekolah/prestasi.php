<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prestasi</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php
include ("navbar.php");

?>

    <!-- Page Header -->


    <header class="intro-header">
        <div class="container-news">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <big>Prestasi</big>
                        <hr class="small">
                        <span class="subheading">Segala perkembangan berita mengenai SMP Muhammadiyah 10 Surakarta</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->



    <div class="container-staff-main-gray">
      <div class="row">
      <?php //foreach ($staff->$result() as $guru) :?>
        <div class="col-sm-4">

          <?//=img($guru->foto)?>


        <?php //endforeach; ?>

          <img src="img/portfolio-2.jpg" class="img-rounded"  alt="gb-2" width="350" height="200">
        </div>
        <div class="col-sm-8">

          <h2>Nama Lengkap</h2>
        </br></br>
          <h5><strong>Mata Pelajaran &nbsp;&nbsp;&nbsp;: &nbsp;</strong>&nbsp; "Exterminate your problem. Even if it is impossible.</h5>
          <h5><strong>Biodata Singkat &nbsp; : &nbsp;</strong>&nbsp; Create a world with integrity and Clarity.</h5>
        </div>
      </div>
    </div>


    <div class="container-staff-main">
      <div class="row">
        <div class="col-sm-4">

          <img src="img/portfolio-1.jpg" class="img-rounded"  alt="gb-2" width="350" height="200">
        </div>
        <div class="col-sm-8">

          <h2>Nama Lengkap</h2>
        </br></br>
          <h5><strong>Mata Pelajaran &nbsp;&nbsp;&nbsp;: &nbsp;</strong>&nbsp; "Exterminate your problem. Even if it is impossible.</h5>
          <h5><strong>Biodata Singkat &nbsp; : &nbsp;</strong>&nbsp; Create a world with integrity and Clarity.</h5>
        </div>
      </div>
    </div>


    <div class="container-staff-main-gray">
      <div class="row">
        <div class="col-sm-4">

          <img src="img/portfolio-2.jpg" class="img-rounded"  alt="gb-2" width="350" height="200">
        </div>
        <div class="col-sm-8">

          <h2>Nama Lengkap</h2>
        </br></br>
          <h5><strong>Mata Pelajaran &nbsp;&nbsp;&nbsp;: &nbsp;</strong>&nbsp; "Exterminate your problem. Even if it is impossible.</h5>
          <h5><strong>Biodata Singkat &nbsp; : &nbsp;</strong>&nbsp; Create a world with integrity and Clarity.</h5>
        </div>
      </div>
    </div>


    <div class="container-staff-main">
      <div class="row">
        <div class="col-sm-4">

          <img src="img/portfolio-1.jpg" class="img-rounded"  alt="gb-2" width="350" height="200">
        </div>
        <div class="col-sm-8">

          <h2>Nama Lengkap</h2>
        </br></br>
          <h5><strong>Mata Pelajaran &nbsp;&nbsp;&nbsp;: &nbsp;</strong>&nbsp; "Exterminate your problem. Even if it is impossible.</h5>
          <h5><strong>Biodata Singkat &nbsp; : &nbsp;</strong>&nbsp; Create a world with integrity and Clarity.</h5>
        </div>
      </div>
    </div>



    <!-- Footer -->
    <?php
    include ("footer.php");
    ?>

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>assets/js/clean-blog.min.js"></script>

</body>

</html>
