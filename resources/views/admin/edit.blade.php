<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Edit Data</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | D-IV Rekayasa Perangkat Lunak</a>
        </div>
    </nav>

    <div class="container mt-3">
        <a href="{{ route('admin.home') }}">
            <i class="bi bi-arrow-left h1"></i>
        </a>

        @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <strong>Berhasil!</strong> {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (Session::get('failed'))
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                <strong>Gagal!</strong> {{ Session::get('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <div class="row d-flex justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Edit Data</h5>
                    <form action="/postEditAdmin/{{ $data->id }}" method="POST">
                        @csrf
                        <div class="form-group mt-4">
                            <label class="text-secondary mb-2">Nama Admin</label>
                            <input type="text" class="form-control border border-secondary" name="name" required
                                value="{{ $data->name }}">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group mt-3">
                            <label class="text-secondary mb-2">Email Admin</label>
                            <input type="email" class="form-control border border-secondary" name="email" required
                                value="{{ $data->email }}">
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group mt-3">
                            <label class="text-secondary mb-2">Pilih Jenis Kelamin</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenisKelamin" value="Laki-laki"
                                    @if ($data->jenis_kelamin == 'Laki-laki') checked @endif>
                                <label class="form-check-label">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenisKelamin" value="Perempuan"
                                    @if ($data->jenis_kelamin == 'Perempuan') checked @endif>
                                <label class="form-check-label">Perempuan</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success mt-5">Edit Data Admin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
