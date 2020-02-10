<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>Daftar Gaji</center>
    <table border=1>
        <thead>
            <tr>
                <th>Nip</th>
                <th>Nama Karyawan</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gaji as $penggajihan)
            <tr>
                <td>{{$penggajihan->nip}}</td>
                <td>{{$penggajihan->nama}}</td>
                <td>{{$penggajihan->jk}}</td>
                <td>{{$penggajihan->jabatan}}</td>
              
                <td><a href="/penggajihan/{{ $penggajihan->id }}">Lihat</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>