<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Bagian</title>
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
    <h2>Laporan Bagian</h2>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Bagian</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($bagians as $index => $bagian)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $bagian->nama_bagian }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>
