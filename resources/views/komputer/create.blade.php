<!doctype html>
<html class="no-js" lang="">
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cahaya Rent | Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="/img/logo2.png">
    <link rel="shortcut icon" href="/img/logo2.png">
    <link rel="stylesheet" href="/style/assets/css/normalize.css">
    <link rel="stylesheet" href="/style/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/style/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/style/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="/style/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="/style/assets/scss/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Trix Editor -->
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
    <!-- Trix Editor -->

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {display: none;}

    </style>

</head>
<body>
<div class="container">
        <h4> Penambahan Data Komputer</h4>
        @if (count($errors)>0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $errors)
                    <li>{{$errors}}</li>
                @endforeach
            </ul>
        @endif
        <form method="POST" action="{{route('komputer.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis_Komputer</label>
            <input type="text" class="form-control" name="Jenis_Komputer" value="{{ old('Jenis_Komputer') }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Spesifikasi</label>
            <input type="text" class="form-control" name="Spesifikasi" value="{{ old('Spesifikasi') }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Foto</label>
            <input type="file" class="date form-control" name="Foto" value="{{ old('Foto') }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Video</label>
            <input type="file" class="date form-control" name="Video" value="{{ old('Video') }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a class="btn btn-secondary" href="/main">Cancel</a>
        </form>
</div>
    <script src="/style/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="/style/assets/js/popper.min.js"></script>
    <script src="/style/assets/js/plugins.js"></script>
    <script src="/style/assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/003603851d.js" crossorigin="anonymous">
    </script>
</body>
</html>