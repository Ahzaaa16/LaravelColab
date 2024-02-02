<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/kirim" method="POST">
        @csrf
        <label>Nama</label> <br>
        <input type="text" name="nama"> <br> <br>
        <label>Alamat</label> <br>
        <textarea name="alamat" cols="30" rows="10"></textarea> <br> <br>

        <input type="submit" value="kirim">
    </form>
</body>
</html>