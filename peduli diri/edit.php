<?php 
    $id = $_GET['id'];
    $database = new PDO("mysql:host=localhost;dbname=user", 'root', '');
    $query = $database->query("SELECT * FROM user_form WHERE id='$id'");
    $data = $query->fetch();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
    <div class="container-sm">
    <form action="proses_edit.php?id=<?= $id ?>" method="post">
        <div>
            <label>nik</label>
            <input type="text" name="nik" value="<?= $data['nama'] ?>"class="form-control" id="floatingInput">
        </div>
        <div>
        <div>
            <label>password</label>
            <input type="text" name="password" value="<?= $data['password'] ?>"class="form-control" id="floatingInput">
        </div>
        <div>
        <div>
            
            
            
        <button type="submit" class="btn btn-info">Simpan</button>
    </form>
    </div>
</body>
</html>     