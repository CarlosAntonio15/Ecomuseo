<title>Formulario donaciones</title>
@extends('layouts.app')
@section('title','Create Donation')
@section('content')

 <!-- Vendor CSS Files -->
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

<!--< ?php $page = 'createVol'; ?>-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="container" data-aos="fade-up">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<br/><br/>
            <h5 style="color: rgba(14, 90, 20, 0.89)" align="center">Formulario donaciones </h5>

              <div class="row mt-5">
                <div class="col-sm-8 offset-sm-2">
                  <form action="{{route('donation.store')}}" method = "post">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="name"><h5>Nombre donador:</h5></label>
                          <br/>
                          <input type="text" name = "name" id = "name" class="form-control" required>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="lastName"><h5>Apellidos:</h5></label>
                          <br/>
                          <input type="text" name = "lastName" id = "lastName" class="form-control" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="donationType"><h5>Tipo de donación:</h5></label>
                          <br/>
                          <input type="radio" name="donationType" value="Dinero"> <h5>Contribución monetaria</h5> 
                          <input type="radio" name="donationType" value="Material"> <h5>Material</h5> 
                          <input type="radio" name="donationType" value="Alimento"> <h5>Alimento</h5> 
                        </div>
                      </div>
                    </div>

                    <br/>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="quantity"><h5>Cantidad:</h5></label>
                          <br/>
                          <input type="number" min="1"name = "quantity" id = "quantity" class="form-control" required>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="currentDate"><h5>Fecha:</h5></label>
                          <br/>
                          <input type="date" name = "currentDate" id = "currentDate" class="form-control" required>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="phone"><h5>Teléfono de contacto:</h5></label>
                          <br/>
                          <input type="tel" name = "phone" id = "phone" class="form-control" required>
                        </div>
                      </div>

                    </div>
                    

                    <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="mail"><h5>Correo electrónico:</h5></label>
                            <br/>
                            <input type="email" name = "mail" id = "mail" class="form-control" >
                          </div>
                        </div>

                        <div class="col-md-8">
                          <div class="form-group">
                            <label for="description"><h5>Descripción:</h5></label>
                            <br/>
                             <input type="description" name = "description" id = "description" class="form-control" required>
                          </div>
                        </div>
                    </div>

                <div>
                    <button type = "submit" class = "btn btn-success">Guardar</button>
                    <input type="button" class = "btn btn-secondary" onclick="history.back()" name="Atrás" value="Atrás">
                </div>

                <br/>


          

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js" asp-append-version="true"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js" asp-append-version="true"></script>
  <script src="vendor/jquery.easing/jquery.easing.min.js" asp-append-version="true"></script>
  <script src="vendor/php-email-form/validate.js" asp-append-version="true"></script>
  <script src="vendor/waypoints/jquery.waypoints.min.js" asp-append-version="true"></script>
  <script src="vendor/counterup/counterup.min.js" asp-append-version="true"></script>
  <script src="vendor/owl.carousel/owl.carousel.min.js" asp-append-version="true"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js" asp-append-version="true"></script>
  <script src="vendor/venobox/venobox.min.js" asp-append-version="true"></script>
  <script src="vendor/aos/aos.js" asp-append-version="true"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

@endsection