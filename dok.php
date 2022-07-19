<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="doc.css">
</head>
<body>
<div class="main">
      <h1>DOKUMENTASI</h1>
      <h2><span class="sub">Dashboard ></span><span class="subsub"> Dokumentasi</span></h2>
      <div class="container">
          <div class="nav">
            <div class="navkiri">
              <form method="GET" action="">
                <input type="search" id="search" name="search" value="<?php if(isset($_GET['search'])){ echo $_GET['search'];} ?>" placeholder="Nama Kegiatan"></input>
              </form>
            </div>
            <div class="isi">
                <select name="Bulan" id="bulan">
                    <option id="option1" Value="01">Januari</option>
                    <option id="option1" Value="02">Februari</option>
                    <option id="option1" Value="03">Maret</option>
                    <option id="option1" Value="04">April</option>
                    <option id="option1" Value="05">Mei</option>
                    <option id="option1" Value="06">Juni</option>
                    <option id="option1" Value="07">Juli</option>
                    <option id="option1" Value="08">Agustus</option>
                    <option id="option1" Value="09">September</option>
                    <option id="option1" Value="10">Oktober</option>
                    <option id="option1" Value="11">November</option>
                    <option id="option1" Value="12">Desember</option>
                </select>
                <select name="Tahun" id="tahun">
                    <option id="option1" Value="01">2015</option>
                    <option id="option1" Value="02">2016</option>
                    <option id="option1" Value="03">2017</option>
                    <option id="option1" Value="04">2018</option>
                    <option id="option1" Value="05">2019</option>
                    <option id="option1" Value="06">2020</option>
                    <option id="option1" Value="07">2021</option>
                    <option id="option1" Value="08">2022</option>
                    <option id="option1" Value="09">2023</option>
                    <option id="option1" Value="10">2024</option>
                    <option id="option1" Value="11">2025</option>
                    <option id="option1" Value="12">2026</option>
                </select>
              </div>
              <a href="coba.php">
              <button type="button" class="button" id="tambah">
                <span class="button_icon">
                <i class="bi bi-plus"></i>
                </span>
                <span class="button_text">Upload Dokumentasi</span>
              </button></div>
            </a>
</body>
</html>

<div id="data" class="modal fade">
 <div class="dialog">
  <div class="content">
   <div class="header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="title">Dokumentasi</h4>
    <br>
    <h6 class="title">Upload Dokumentasi</h6>
   </div>
   <div class="modal-body">
    <form method="post" id="insert_form">  
     <tr>
       <td>Nama Kegiatan <input type="text" name="nama" id="nama" placeholder="Drop disini atau pilih file" required=""></td>
       <br>
       <label>Tanggal Pelaksanaan</label>
       <input type="text" name="umur" id="umur" class="form-control" />
       <br>
       <td><input type="file" name="foto" id="foto" required=""></td>
     </tr>
     <br />
     <tr>
       <td>&nbsp;</td>
       <td><input type="submit" name="kirim" id="kirim" value="Upload"></td>
     </tr>
     <br>
     <button>Cancel</button>

    </form>
   </div>