<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Tanaman</title>
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
    <h2>Laporan Tanaman</h2>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Tanaman</th>
          <th>Tanggal Tanam</th>
          <th>Lahan</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tanamans as $index => $tanaman)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $tanaman->nama_tanaman }}</td>
            <td>{{ $tanaman->tanggal_tanam }}</td>
            <td>{{ $tanaman->lahan->nama_lahan }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>
