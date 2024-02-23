<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soal 3</title>
</head>

<body>
    <h1>Soal 3</h1>
    <form action="{{ route('soalTiga.proses') }}" method="post">
        <label for="tipe">Tipe Barang</label>
        <select name="tipe_barang" id="tipe">
            <option value="A">Barang A</option>
            <option value="B">Barang B</option>
        </select>
        <label for="jml_barang">Jumlah Barang</label>
        <input type="text" name="jml_barang" id="jml_barang">
        <button type="submit"> Hitung </button>
    </form>

</body>

</html>
