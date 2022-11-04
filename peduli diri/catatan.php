<?php
include('koneksi.php');

  if(!isset($_SESSION["nama"])){
    Header("location:login.php");
  }
?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CATATAN PERJALANAN</title>
  </head>
  <body>
        <?php
        
        $db = new PDO("mysql:host=localhost;dbname=user",'root', '');
        $query = $db->query("SELECT * FROM catatanperjalanan");
        ?>
    

    <div class="container-sm">
        
        <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered border-info">
            <thead class="bg-info text-white">
                <th>NIK</th>
                <th>TANGGAL</th>
                <th>WAKTU</th>
                <th>LOKASI</th>
                <th>SUHU</th>
            </thead>
        
            <tbody>
            <?php while($data = $query->fetch()): ?>
                <tr>
                    <td><?= $data['id'] ?></td>
                    <td><?= $data['tanggal'] ?></td>
                    <td><?= $data['waktu'] ?></td>
                    <td><?= $data['lokasi'] ?></td>
                    <td><?= $data['suhu'] ?></td>

                    <td>
                        <a href="proses_hapus2.php?id=<?= $data['id'] ?>"class="btn btn-info">Hapus</a>
                    </td>

                </tr>
            <?php endwhile ?>
            </tbody>
    </table>
    <a href="index.php "class="btn btn-danger">Kembali</a>
    <a href="tambah.php"class="btn btn-secondary">Tambah</a>

        </div>
       

    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>