<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h1>Data Pembelian</h1></center>
    @foreach ($pembelian as $data)
        Nama Barang : {{$data->nama_barang}} <br>
        Nama Suplier : {{$data->nama_supplier}} <br>
        Qyt : {{$data->qyt}} <br>
        Tanggal: {{$data->tgl}} <br>
        <hr>
    @endforeach
</body>
</html>
