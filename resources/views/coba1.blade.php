<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Buku</center>
    @foreach($buku as $data)
    judul : {{ $data['judul']}} <br>
    Penerbit : {{ $data['Penerbit']}} <br>
    Harga : {{ $data['harga']}} <br>
    
    @if($data['harga'] >= 200000 )
       @php $status = 'Premium' @endphp

    @elseif($data['harga'] >= 150000 )
        @php $status = 'Reguler' @endphp

    @else
        @php $status = 'Bajakan' @endphp
    @endif
    status : {{ $status }}
    <br>    

    @if($status == "Premium")
        @php $keterangan = "Pembeli Cerdas"; @endphp
    @elseif($status == "Reguler")
        @php $keterangan = "Pembeli Cerdas"; @endphp
    @elseif($status == "Bajakan")
        @php $keterangan = "Pembeli Kurang Cerdas"; @endphp
    @endif
    keterangan : {{$keterangan}}
    <br>

    penulis : {{ $data['penulis']}} <hr>
    @endforeach
</body>
</html>