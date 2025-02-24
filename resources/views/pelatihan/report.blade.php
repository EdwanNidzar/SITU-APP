<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Pelatihan</title>
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
    <h2>Laporan Pelatihan</h2>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>NIP | Nama Pegawai</th>
          <th>Nama Pelatihan</th>
          <th>Tanggal Pelatihan</th>
          <th>Penyelenggara</th>
          <th>Hasil Pelatihan</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pelatihans as $index => $pelatihan)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $pelatihan->pegawai->nip }} | {{ $pelatihan->pegawai->nama }}</td>
            <td>{{ $pelatihan->nama_pelatihan }}</td>
            <td>{{ $pelatihan->tanggal_pelatihan }}</td>
            <td>{{ $pelatihan->penyelenggara }}</td>
            <td>{{ $pelatihan->hasil_pelatihan }}</td>
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
