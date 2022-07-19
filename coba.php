<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>