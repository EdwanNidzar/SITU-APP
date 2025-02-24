<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Lahan</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 14px;
    }

    .container {
      width: 100%;
      margin: 0 auto;
      text-align: center;
    }

    h2 {
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    table,
    th,
    td {
      border: 1px solid black;
    }

    th,
    td {
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>

<body>
  <div class="container">
    <img src="{{ public_path('svg/kop-2.svg') }}" alt="Kop Surat" style="width: 100%;">
    <h2>Laporan Lahan</h2>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Lahan</th>
          <th>Lokasi Lahan</th>
          <th>Luas Lahan</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($lahans as $index => $lahan)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $lahan->nama_lahan }}</td>
            <td>{{ $lahan->lokasi_lahan }}</td>
            <td>{{ number_format($lahan->luas_lahan, 0) }} Meter persegi</td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div style="margin-top: 20px; text-align: right;">
      <p>Banjarmasin, {{ date('d F Y') }}</p>
      <p>Mengetahui&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
      <p style="margin-top: 70px;">(_______________________)</p>
    </div>
    
  </div>
</body>

</html>
