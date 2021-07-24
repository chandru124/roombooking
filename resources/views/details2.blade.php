@extends('nav')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Saravanan's Room</title>
</head>
<body>
    <h1 style="margin: 56px;">Saravanan's Room</h1>

    <main class="main-section">
        <div class="container">
            <div class="row">
              <div class="col-6 col-sm-4">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="/images/room2.1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/images/room2.2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="/images/room2.3.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-6 col-sm-4" style="margin-left: -96;">
                  <h3>Sarvanan's Room</h3>
                  <p>Address: no 344 , west street
                    coimbatore
                    pincode:625622
                  </p>
                  <h3>RS 2000/per night</h3>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Food</label>
                  </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Dry Clearning</label>
                      </div>
                
               
              </div>
              <div class="col-6 col-sm-4" style="text-align: center;margin-top: 75px;">
                <a href="#" class="btn btn-primary rounded-pill">Book Now</a>
              </div>
             
              
            </div>
        </div>
    </main>

  
  
  
  
  
  
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
@endsection
