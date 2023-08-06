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
    <?php 
    $i = 0;
    ?>
    <h1>data mahasiswa</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">GAMBAR</th>
            <th scope="col">NAMA</th>
            <th scope="col">NIM</th>
            <th scope="col">Tindakan</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($mahasiswa as $item)    
          <tr>
            <th scope="row">{{$i=$i+1}}</th>
            <td><img src="{{asset('storage/image/' . $item->gambar)}}" alt="gambar" style="max-height: 100px"></td>
            <td>{{$item->nama}}</td>
            <td>{{$item->nim}}</td>
            <td><a href="{{route('edit',[$item->id])}}" class="btn btn-warning">EDIT</a>
                <form action="{{route('destroy',[$item->id])}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                    
                </form>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
      <a href="{{route('create')}}" class="btn btn-primary">tambah data</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>