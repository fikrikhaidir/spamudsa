<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SMP Muhammadiyah 10</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/css/ppdb.css" rel="stylesheet">

    <!-- Custom Fonts -->
     <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <!-- <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->



</head>

<body>

<!-- Navbar -->


<!-- Header -->
    <div class="container">
      <div class="row" style="border-bottom: 8px double;">
          <div class="col-md-9 col-md-push-3">
            <div class="header-ppdb">
              <h5>FORMULIR PENDAFTARAN</h5><br>
              <h5>SMP MUHAMMADIYAH 10 SURAKARTA</h5><br>
              <h6>Program Sekolah Unggulan</h6><br>
              <h5>TERAKREDITASI "A"</h5><br>
              <p> Alamat : Jl. Srikaya 3 Karangasem Laweyan Surakarta (Utara Lapangan Karangasem)</p><br>
              <p>    Telp : (0271) 738916 </p>
            </div>
          </div>
          <div class="col-md-3 col-md-pull-9">
            <div class="logo-dikdasmen">
              <center>
              <img src="<?php echo base_url()?>assets/img/logo.jpg">
              </center>
            </div>
          </div>
        </div>
    </div>



    <div class="container">
      <table class="table">
        <tr>
          <td width="65%"><b><p>Identitas Murid :</p></b></td>
          <td width="35%" colspan="2"><b><p>No Pendaftaran :</p></b></td>
        </tr>
      </table>


      <table class="table">
        <form class="form-horizontal">
        <div class="form-group">
        <div class="form-ppdb">
        <tr>
          <td width="25%"><label for="namaLengkap">Nama Lengkap</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="namaLengkap" placeholder="Nama Lengkap"></td>
        </tr>
        <tr>
          <td width="25%"><label for="namaLengkap">Tempat & Tanggal Lahir </label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="ttgl" placeholder="Tempat & Tanggal Lahir"></td>
        </tr>


        <tr>
          <td width="25%"><label for="namaLengkap">Jenis Kelamin</label></td>
          <td width="1%"><p> : </p></td>
            <td>
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"><b> Laki-Laki</b></label>
              <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> <b> Perempuan</b> </label>
            </td>
        </tr>

        <tr>
          <td width="25%"><label for="namaLengkap">Agama</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="agama" placeholder="Agama"></td>
        </tr>

        <tr>
          <td width="25%"><label for="namaLengkap">Anak Ke</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="namaLengkap" placeholder="Anak ke"></td>
        </tr>

        <tr>
          <td width="25%"><p for="namaLengkap">Status Dalam Keluarga*</p></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control input-md" type="text" id="namaLengkap" placeholder="Anak Kandung/Anak Tiri/Anak Angkat/Lainnya..."></td>
        </tr>

        <tr>
          <td width="25%" style="vertical-align: top;"><p>Alamat Murid</p></td>
          <td width="1%" style="vertical-align: top;"><p> : </p></td>
          <td width="74%"><textarea class="form-control"  id="alamatMurid" rows="3" placeholder="Alamat Lengkap Murid"></textarea></td>
        </tr>

        <tr>
          <td width="25%"><p><b>No. Induk Siswa Nasional (NISN)</b></p></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control input-md" type="text" id="namaLengkap" placeholder="Nomor Induk Siswa Nasional"></td>
        </tr>

        <tr>
          <td width="25%"><label for="namaLengkap">Anak Ke</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="namaLengkap" placeholder="Anak ke"></td>
        </tr>

        </div>
        </div>
      </form>
      </table>

      <table class="table">
        <form class="form-horizontal">
        <div class="form-group">
        <div class="form-ppdb">
          <tr>
            <td><p><b>Sekolah Asal :</p></b></td>
          </tr>
        <tr>
          <td width="25%"><label for="namaSekolah">Nama Sekolah</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="namaSekolah" placeholder="Nama Sekolah"></td>
        </tr>
        <tr>
          <td width="25%" style="vertical-align:top;"><label for="alamatSekolah">Alamat Sekolah </label></td>
          <td width="1%" style="vertical-align:top;"><p> : </p></td>
          <td width="74%"><textarea class="form-control"  id="alamatSekolah" rows="3" placeholder="Alamat Lengkap Sekolah"></textarea></td>
        </tr>

        <tr>
          <td width="25%"><label for="nstl">No. Surat Tanda Lulus (STL)</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="nstl" placeholder="No. Surat Tanda Lulus (STL)"></td>
        </tr>
        </div>
        </div>
      </form>
      </table>

      <table class="table">
        <form class="form-horizontal">
        <div class="form-group">
        <div class="form-ppdb">
          <tr>
            <td><p><b>Identitas Orang Tua/Wali : </p></b></td>
          </tr>

          <!-- Biodata Ayah -->

        <tr>
          <td width="25%"><label for="namaAyah">a. &nbsp; Nama Ayah</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="namaAyah" placeholder="Nama Sekolah"></td>
        </tr>
        <tr>
          <td width="25%"><label for="nomorTelponAyah">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No. Telp</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="nomorTelponAyah" placeholder="Nomor Telpon"></td>
        </tr>
        <tr>
          <td width="25%"><label for="agamaAyah">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Agama</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="agamaAyah" placeholder="Agama"></td>
        </tr>
        <tr>
          <td width="25%"><label for="pendidikanAyah">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pendidikan</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="pendidikanAyah" placeholder="pendidikan"></td>
        </tr>
        <tr>
          <td width="25%"><label for="pekerjaanAyah">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pekerjaan</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="pekerjaanAyah" placeholder="pekerjaan"></td>
        </tr>
        <tr><td> &nbsp; </td></tr>
        <!-- Biodata Ibu -->


        <tr>
          <td width="25%"><label for="namaIbu">b. &nbsp; Nama Ibu</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="namaIbu" placeholder="Nama Ibu"></td>
        </tr>
        <tr>
          <td width="25%"><label for="nomorTelponIbu">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No. Telp</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="nomorTelponIbu" placeholder="Nomor Telpon"></td>
        </tr>
        <tr>
          <td width="25%"><label for="agamaIbu">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Agama</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="agamaIbu" placeholder="Agama"></td>
        </tr>
        <tr>
          <td width="25%"><label for="pendidikanIbu">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pendidikan</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="pendidikanIbu" placeholder="pendidikan"></td>
        </tr>
        <tr>
          <td width="25%"><label for="pekerjaanIbu">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pekerjaan</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="pekerjaanIbu" placeholder="pekerjaan"></td>
        </tr>
        <tr><td> &nbsp; </td></tr>
        <!-- Biodata Orang tua wali -->


        <tr>
          <td width="25%"><label for="namaWali">c. &nbsp; Nama Wali</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="namaWali" placeholder="Nama Wali"></td>
        </tr>
        <tr>
          <td width="25%"><label for="nomorTelponWali">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No. Telp</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="nomorTelponWali" placeholder="Nomor Telpon"></td>
        </tr>
        <tr>
          <td width="25%"><label for="agama">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Agama</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="agamaWali" placeholder="Agama"></td>
        </tr>
        <tr>
          <td width="25%"><label for="pendidikanWali">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pendidikan</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="pendidikanWali" placeholder="pendidikan"></td>
        </tr>
        <tr>
          <td width="25%"><label for="pekerjaanWali">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pekerjaan</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="pekerjaanWali" placeholder="pekerjaan"></td>
        </tr>
        <tr>
          <td width="25%"><label for="pekerjaanWali">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Penghasilan Orang Tua/Wali</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" id="penghasilan" placeholder="Penghasilan Orang Tua/Wali"></td>
        </tr>
        <tr><td> &nbsp; </td></tr>

        </div>
        </div>
      </form>
      </table>

    </div>

<!-- End of ppdb form -->
<center>
<p>
  <button type="button" class="btn btn-primary btn-lg">Kirim</button>
  <button type="button" class="btn btn-default btn-lg">Reset</button>
</p>
</center>




    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>assets/js/clean-blog.min.js"></script>


</body>

</html>
