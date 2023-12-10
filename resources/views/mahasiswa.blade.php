<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD LARAVEL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 mb-3">
                <h1 class="text-center">CRUD LARAVEL</h1>
            </div>
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href={{ route('mahasiswa.tambah') }} class="btn btn-md btn-success mb-3">TAMBAH
                            MAHASISWA</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">NPM</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">JURUSAN</th>
                                    <th scope="col">JENIS KELAMIN</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($data->count() > 0)
                                @foreach ($data as $mahasiswa)
                                <tr>
                                    <td>{{ $mahasiswa->nama }}</td>
                                    <td>{{ $mahasiswa->npm }}</td>
                                    <td>{{ $mahasiswa->email }}</td>
                                    <td>{{ $mahasiswa->jurusan }}</td>
                                    <td>{{ $mahasiswa->jenis_kelamin }}</td>
                                    <td class="text-center">
                                        <a href="/mahasiswa/edit/{{ $mahasiswa->id }}"
                                            class="btn btn-sm btn-primary">EDIT</a>
                                        <a href="/mahasiswa/hapus/{{ $mahasiswa->id }}"
                                            class="btn btn-sm btn-danger">HAPUS</a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <div class="alert alert-danger">
                                            Data Mahasiswa belum Tersedia.
                                        </div>
                                    </td>
                                </tr>
                                @endif
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>