<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Pemeliharaan</title>
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
    <h2>Laporan Pemeliharaan</h2>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Tanaman</th>
          <th>Kegiatan</th>
          <th>Tanggal Pemeliharaan</th>
          <th>Biaya Pemeliharaan</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pemeliharaans as $index => $pemeliharaan)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $pemeliharaan->tanaman->nama_tanaman }}</td>
            <td>{{ $pemeliharaan->kegiatan }}</td>
            <td>{{ $pemeliharaan->tanggal }}</td>
            <td>Rp {{ number_format($pemeliharaan->biaya_pemeliharaan, 0, ',', '.') }}</td>
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
