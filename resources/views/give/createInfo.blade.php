<title>Formulario donaciones</title>
@extends('layouts.form')
@section('title','Create Donation')
@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Donaciones <small>Formulario</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form action="{{route('give.storeInfo')}}" method = "post">
                    @csrf
                    <div class="row mt-12">
                        <div class="col-sm-8 offset-sm-2">
                            <div class="form-group">
                                <label for="Nombre"><h5>Ingrese los datos que se le sean solicitados para procesar su donacion..</h5></label>
                            </div>
                    
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"><h5>Nombre:</h5></label>
                                        <input type="text" name = "name" id = "name" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname"><h5>Apellido:</h5></label>
                                        <input type="text" name = "lastname" id = "lastname" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">

                                        <h5> {!! Form::Label('donationType', 'Donacion a escoger:') !!}</h5>
                                            <br>
                                            <h5> {!! Form::radio('donationType', 'Monetaria') !!} Monetaria</h5>
                                            <h5> {!! Form::radio('donationType', 'Alimenticia') !!} Alimenticia</h5>
                                            <h5>{!! Form::radio('donationType', 'Material') !!} Material</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="quantity"><h5>Cantidad:</h5></label>
                                            <input type="number" min="1" name = "quantity" id = "quantity" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="currentDate"><h5>Fecha:</h5></label>
                                            <input type="date" name = "currentDate" id = "currentDate" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="phone"><h5>Teléfono de contacto:</h5></label>
                                        <input type="tel" name = "phone" id = "phone" class="form-control" required>
                                    </div>
                                </div>
                    

                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="mail"><h5>Correo electronico:</h5></label>
                                        <input type="text" name = "mail" id = "mail" class="form-control" required>
                                    </div>
                                </div>

                    
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description"><h5>Descripcion:</h5></label>
                                        <input type="text" name = "description" id = "description" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <button type = "submit" class = "btn btn-success"><i class="fa fa-save"></i> Procesar solicitud</button>
                            
                                <input type="button" class = "btn btn-secondary" onclick="history.back()" name="Atrás" value="Atrás">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection