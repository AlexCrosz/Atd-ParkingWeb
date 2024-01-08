<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      body {text-align: center;}
      h1 {color: blue;}
      .warning {color: red;}
    </style>
  </head>
  <body>
    <div>
      <h1>ADT E-Parking</h1>
      <p>Tiket</p>
      <p><strong>Tanggal: </strong>{{ $vehicles->tanggal }}</p>
      <p><strong>Waktu:</strong> {{ $vehicles->jam_masuk }}</p>
      <p><strong>Jenis Kendaraan:</strong> {{ $vehicles->jenis_kendaraan }}</p>
      <p><strong>Code:</strong> {{ $vehicles->plat }}</p>
      <p class="warning">Tolong jangan hilang!</p>
      <p class="">Terimakasih!</p>
    </div>
    
  </body>
</html>