<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Panen</title>
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
    <img src="{{ public_path('svg/kop.svg') }}" alt="Kop Surat" style="width: 100%;">
    <h2>Laporan Panen</h2>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Tanaman</th>
          <th>Tanggal Panen</th>
          <th>Jumlah Panen</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($panens as $index => $panen)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $panen->tanaman->nama_tanaman }}</td>
            <td>{{ $panen->tanggal_panen }}</td>
            <td>{{ number_format($panen->jumlah, 0) }} kg</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>
