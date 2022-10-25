<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">



    <title>PEDULI DIRI</title>
  </head>
  <body>
        <?php
        
        $db = new PDO("mysql:host=localhost;dbname=user",'root', '');
        $query = $db->query("SELECT * FROM user_form");
        ?>
    

    <div class="container-sm">
        
        <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered border-info">
            <thead class="bg-info text-white">
                <th>nik</th>
                <th>password</th>
            </thead>
        
            <tbody>
            <?php while($data = $query->fetch()): ?>
                <tr>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['password'] ?></td>

                    <td>
                        <a href="edit.php?id=<?= $data['id'] ?>"class="btn btn-info">Update</a>
                        <a href="proses_hapus.php?nik=<?= $data['nama'] ?>"class="btn btn-info">Hapus</a>
                    </td>
                </tr>
            <?php endwhile ?>
            </tbody>
    </table>
    <a href="login.php "class="btn btn-danger">Logout</a>
    <a href="catatan.php "class="btn btn-secondary">Catatan</a>
        </div>
       

    

    
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    
  </body>
</html>