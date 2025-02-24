<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan Pegawai</title>
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

    .foto {
      width: 50px;
      height: 50px;
      object-fit: cover;
      border-radius: 50%;
    }
  </style>
</head>

<body>
  <div class="container">
    <img src="{{ public_path('svg/kop-2.svg') }}" alt="Kop Surat" style="width: 100%;">
    <h2>Laporan Pegawai</h2>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Foto</th>
          <th>NIP</th>
          <th>Nama Pegawai</th>
          <th>Bagian</th>
          <th>Jabatan</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pegawais as $index => $pegawai)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>
              <img class="foto" src="{{ $pegawai->foto ? public_path('storage/' . $pegawai->foto) : 'https://placehold.co/400x400' }}"
                alt="{{ $pegawai->nama }}">
            </td>
            <td>{{ $pegawai->nip }}</td>
            <td>{{ $pegawai->nama }}</td>
            <td>{{ $pegawai->bagian->nama_bagian ?? '-' }}</td>
            <td>{{ $pegawai->jabatan->nama_jabatan ?? '-' }}</td>
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
