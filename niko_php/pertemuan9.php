<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KALKULATOR</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 style="text-align: center;">MASUK KALKULATOR</h1>
    <form action="display.php" method="post" class="formData">
        Nama : <input type="text" name="nama" placeholder="Masukkan Nama" required oninvalid="this.setCustomValidity('Nama Wajib Di Isi')"><br><br>
        Email : <input type="text" name="email" placeholder="Masukkan Email" required oninvalid="this.setCustomValidity('Email Tidak Boleh Kosong')"><br><br>
        Jenis Kelamin : <br>
        <input type="radio" name="gender" value="Male">Male<br>
        <input type="radio" name="gender" value="Female">Female<br>
        <input type="radio" name="gender" value="Other">Other<br>
        <input type="submit">
    </form>
</body>

</html>
