<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>data mahasiswa</title>
  </head>
  <body>
    <h1>Form Edit Data Mahasiswa</h1>
    <form method="POST" action="{{route('update',[$mahasiswa->id])}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" value="{{$mahasiswa->nama}}">
        </div>
        <div class="mb-3">
          <label for="nim" class="form-label">Nim</label>
          <input type="text" class="form-control" id="nim" name="nim" value="{{$mahasiswa->nim}}">
        </div>
        <div class="mb-3">
          <label for="gambar" class="form-label">Gambar</label> <br>
          <img src="{{asset('storage/image/' . $mahasiswa->gambar)}}" alt="gambar" style="max-height: 100px; margin:10px">
          <input type="file" class="form-control" id="gambar" name="gambar">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
      <a href="{{route('index')}}" class="btn btn-primary" style="margin-top: 10px">kembali</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>