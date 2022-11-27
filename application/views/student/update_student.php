<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Siswa</title>
</head>
<body>
<form method="POST">
        <div> Nama Siswa : <input type="text" name="nama_lengkap" value="<?=$student['nama_lengkap']?>" required></div>
        <div> Kelas : <input type="text" name="kelas" value="<?=$student['kelas']?>"required></div>
        <div> Jurusan : <input type="text" name="kelas" value="<?=$student['jurusan']?>" required></div>
        <div> Nama Orang Tua : <input type="text" name="nama_orang_tua" value="<?=$student['nama_orang_tua']?>"required></div>
        <div> <input type="submit" name="tambah_siswa" value="Update Data Siswa" required></div>
    </form>
</body>
</html>