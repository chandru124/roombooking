@extends('nav')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    

    
    <main class="main-section">
            <div class="container">
                <div class="row justify-content-center">
                     <div class="col-md-4">
                        <div class="card shadow" style="width: 20rem; margin-top: 30%;margin-left: -40px;">
                         <img src="/images/room no 1.jpg" class="card-img-top" alt="roomno1">
                           <div class="card-body text-center">
                              <h5 class="card-title">Chandru's Room</h5>
                                <p class="card-text">Room are available with best price</p>
                                 <a type="button" id="Mypage1" class="btn btn-outline-primary my-2 my-sm-0 login1 rounded-pill" href="/details1">View Deals</a>
                            </div>
                        </div>
                    </div>
                    <div id="Mypage2" class="col-md-4">
                        <div class="card shadow" style="width: 20rem; margin-top: 30%;margin-left: 40px;">
                         <img src="/images/room no 2.jpg" class="card-img-top" alt="roomno2">
                           <div class="card-body text-center">
                              <h5 class="card-title">Sarvanan's room</h5>
                              <p class="card-text">rooms are available at affordable price</p>
                              <a type="button" id="Mypage1" class="btn btn-outline-primary my-2 my-sm-0 login1 rounded-pill" href="/details2">View Deals</a>
                            </div>
                        </div>
                    </div>

          </div>
        </div>  
    </main>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>
</html>
@endsection