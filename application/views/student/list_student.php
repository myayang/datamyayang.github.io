<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="card">
  <div class="card-body">
    <a href="<?=site_url()?>student/create" class="btn btn-success">Tambah</a>
  <table class="table">
    <thead>
        <th>Nama Lengkap</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student['nama_lengkap']?></td>
                <td><a href="<?=base_url('student/update/'.$student['id'])?>">Edit</a>
                <a onclick="return confirm('Apa Anda Yakin ?')" href="<?=base_url('student/delete/'.$student['id'])?>">Delete</a></td>
            </tr>
            <?php endforeach; ?>
    </tbody>
  </table>  
  </div>
</div>
</body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</html>