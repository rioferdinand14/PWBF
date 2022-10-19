<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Data Guru</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Data Guru</h1>
        <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="card-body">
            <div class="table">
                <thead>
                    <td>No</td>
                    <td>NIP</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>Jenis Kelamin</td>
                    <td>Nomor Telepon</td>
                    <td>E-mail</td>
                </thead>
                <tbody>
                    @foreach ($guru as $no => $hasil)
                        <tr>
                            <td>{{ $no+1 }}</td>
                            <td>{{$hasil -> NIP}}</td>
                            <td>{{$hasil -> nama}}</td>
                            <td>{{$hasil -> alamat}}</td>
                            <td>{{$hasil -> j_kel}}</td>
                            <td>{{$hasil -> no_telp}}</td>
                            <td>{{$hasil -> email}}</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm">Edit</a>
                                <a href="" class="btn btn-success btn-sm">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </div>
          
        </div>
    </div>
   
</body>
</html>