<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Mahasiswa</title>
  </head>
  <body>
  <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 bg-primary py-2">
                       <div class="dropdown float-right">
                          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" 
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bi bi-person-square"></i> User
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">{{Auth::user()->name ?? ''}}</a>
                          <a class="dropdown-item" href="/user">User</a>
                          <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 vh-100">
                    <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link" href="#">Home</a>
                    <a class="nav-link active" href="/mahasiswanew">Mahasiswa</a>
                    <a class="nav-link" href="#">Dosen</a>
                    <a class="nav-link" href="#">Skripsi</a>
                </div>
                    </div>
                    <div class="col-lg-10 vh-100">
                    <div class="card mt-4">
                        <div class="card-header">
                        <a name="" id="" class="btn btn-primary" href="/user/formuliruser" role="button">
                        <i class="bi bi-file-plus"></i>
                                ADD USER
                            </a>
                        <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/user/cari">
                                <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="card-body">
                            @if (session('alert'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>{{session('alert')}}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama pengguna</th>
                                    <th scope="col">Email pengguna</th>
                                    <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $no => $u)
                                    <tr>
                                        <th scope="row">{{++$no}}</th>
                                        <td>{{$u -> name}}</td>
                                        <td>{{$u -> email}}</td>
                                        

                                        <td>
                                            <a href="/user/formuliredituser/{{ $u -> id }}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                                            <a href="/user/hapususer/{{ $u -> id }}" class="btn btn-outline-primary"><i class="bi bi-x-square"></i></a>
                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        <span class="float-right">{{$user->links()}}</span>
                        </div>
                    
                    </div>
                </div>
                </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>