<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Data Crowd</title>
  </head>
  <body>
   <div class="container">
    @if(session('well done'))
        <div class="alert alert-success" role="alert">
          {{session('well Done')}}
        </div>
    @endif
    <div class="row">
        <div class="col-6">
            <h1>Data Crowd</h1>
        </div>
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>
  
            <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form action="/crowd/create" method="POST">
                                @csrf
                                <div class="form-group">
                                  <label for="exampleInputEmail1">NIK</label>
                                  <input type="number" class="form-control" id="nik" name="nik">
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputPassword1">Nama</label>
                                  <input type="text" class="form-control" id="nama" name="nama">
                                </div>

                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="Pria" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                      Pria
                                    </label>
                                </div>
                            
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gender" value="Wanita">
                                    <label class="form-check-label" for="exampleRadios2">
                                      Wanita
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Kelas</label>
                                    <select name="kelas" class="form-control" id="exampleFormControlSelect1">
                                      <option value="GS" >Grand Stand</option>
                                      <option value="VIP">VIP</option>
                                      <option value="VVIP">VVIP</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
        </div>

        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Nik</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Kelas</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach($data_crowd as $crowd)
              <tr>
                <td>{{ $crowd->nik }}</td>
                <td>{{ $crowd->nama }}</td>
                <td>{{ $crowd->gender }}</td>
                <td>{{ $crowd->kelas }}</td>
                <td>
                    <a href="/crowd/{{ $crowd->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                    <a href="/crowd/{{ $crowd->id }}/delete" class="btn btn-sm btn-danger" onclick="return confirm('Mau Di Hapus ?')">Hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>