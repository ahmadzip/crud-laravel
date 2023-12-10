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
                <h1 class="text-center">EDIT MAHASISWA</h1>
            </div>
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="/mahasiswa/update/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class=" form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">
                            </div>
                            <div class="form-group">
                                <label for="npm">NPM:</label>
                                <input type="text" class="form-control" id="npm" name="npm" value="{{ $data->npm }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $data->email }}">
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan:</label>
                                <input type="text" class="form-control" id="jurusan" name="jurusan"
                                    value="{{ $data->jurusan }}">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin:</label>
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin"
                                    value="{{ $data->jenis_kelamin }}">
                                    <option value="cowo">Cowok</option>
                                    <option value="cewe">Cewek</option>
                                </select>
                            </div>
                            <div class="form-group float-right mb-1 mt-2">
                                <button type="submit" class="btn btn-md btn-primary">EDIT</button>
                                <a href="{{ url('/mahasiswa') }}" class="btn btn-md btn-danger">BATAL</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>