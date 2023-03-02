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
                Data Berhasil Diedit
            </div>
        @endif
        <div class="row">
                <div class="col-lg-12">
                    <form action="/crowd/{{ $crowd->id }}/update" method="POST">
                        @csrf
                        <div class="form-group">
                        <label for="exampleInputEmail1">NIK</label>
                        <input type="number" class="form-control" id="nik" name="nik" value="{{ $crowd->nik }}">
                        </div>

                        <div class="form-group">
                        <label for="exampleInputPassword1">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $crowd->nama }}">
                        </div>

                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Pria" @if($crowd->gender == 'Pria') selected @endif checked>
                            <label class="form-check-label" for="exampleRadios1">
                            Pria
                            </label>
                        </div>
                    
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Wanita" @if($crowd->gender == 'Pria') selected @endif>
                            <label class="form-check-label" for="exampleRadios2">
                            Wanita
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Kelas</label>
                            <select name="kelas" class="form-control" id="exampleFormControlSelect1">
                            <option value="GS" @if($crowd->kelas == 'GS') selected @endif >Grand Stand</option>
                            <option value="VIP" @if($crowd->kelas == 'VIP') selected @endif>VIP</option>
                            <option value="VVIP" @if($crowd->kelas == 'VVIP') selected @endif>VVIP</option>
                            </select>
                        </div>

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Update</button>
                </div>
                    </form> 
            </div>
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