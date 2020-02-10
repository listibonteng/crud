<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<fieldset>
        <legend>Show Data Gaji</legend>
    
        Nip          : <b>{{$gaji->nip}}</b><br>
        Nama         : <b>{{$gaji->nama}}</b><br>
        Agama        : <b>{{$gaji->agama}}</b><br>
        Jenis Kelamin: <b>{{$gaji->jk}}</b><br>
        Alamat       : <b>{{$gaji->alamat}}</b><br>
        Jabatan      : <b>{{$gaji->jabatan}}</b><br>

      
        @if($gaji->jabatan == "manager")
            @php $status=5000000 @endphp

        @elseif($gaji->jabatan == "Sekretaris")
            @php $status=3500000 @endphp

        @else
            @php $status=2500000 @endphp   
    @endif 
    
    gaji : {{$status}}
        <br>
        @if($gaji->jam_kerja >= 100)
            @php $bajigur = $status*5/100 @endphp

        @elseif($gaji->jam_kerja >= 200)
            @php $bajigur = $status*7.5/100 @endphp

        @else
            @php $bajigur = $status*10/100 @endphp
  
        @endif
        upah : {{$bajigur}}
        <br>
    
        Jam Kerja    : <b>{{$gaji->jam_kerja}}</b><br>
    </fieldset>
</body>
</html>