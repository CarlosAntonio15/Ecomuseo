<title>Contro de egresos</title>
@if( Auth::user()->rol==1 or Auth::user()->rol==2)
@extends('layouts.adminlayout')
@section('title','Registrar egreso')
@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Egreso <small> formulario</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
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


                    @if(!empty($expense))
                        {!! Form::model($expense, ['route' => ['expense.update', $expense->id], 'method'=>'put']) !!}
                    @else
                        {!! Form::open(['route' => 'expense.store', 'method'=>'post']) !!}
                    @endif
                    <div class="row mt-5">
                        <div class="col-sm-8 offset-sm-2">          

                            <div class="row">
                                <div class="col-md-9">
                                    <label for="date"><h6>Fecha de egreso:</h6></label>
                                    <br/>
                                    <input type="date" name = "date" id = "date" class="form-control" required>
                                </div>
                            </div>
                            

                            <div class="row">
                                <div class="col-md-9">
                                    {!! Form::Label('voucher', 'Numero de factura') !!}
                                    {!! Form::text('voucher', null, ['placeholder' => 'Ingrese el numero de la factura', 'class' => 'form-control' ]) !!}
                            
                                </div>
                            </div>

                            
                            <div class="row">
                                <div class="col-md-9">
                                    {!! Form::Label('description', 'Detalle') !!}
                                    {!! Form::text('description', null, ['placeholder' => 'Ingrese el detalle del egreso', 'class' => 'form-control' ]) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    {!! Form::Label('responsable', 'Responsable') !!}
                                    {!! Form::text('responsable', null, ['placeholder' => 'ingrese el Responsable ', 'class' => 'form-control' ]) !!}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                    {!! Form::Label('amount', 'Total') !!}
                                        {!! Form::number('amount', null, ['placeholder' => 'Ingresa el total de egreso', 'class' => 'form-control' ]) !!}
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <button type="summit" class="btn-md btn-success">
                                    <i class="fa fa-save"></i> {{ !empty($expense) ? 'Actualizar ' : 'Guardar ' }}
                                </button>
                                <a href="{{ route('expense.index') }}" class="btn-sm btn-secondary btn-sm">
                                    <i class="fa fa-reply"></i> Atrás
                                </a>
                            </div>
                            
                            <br/>
                        </div>
                    </div>
                    {!! Form::close() !!}    
                </div>    
            </div>
        </div>
    </div>
</div>

@endsection
@endif
@if( Auth::user()->rol==3 )
    @section('content')
        <!-- page content -->
        <div class="col-md-12">
            <div class="col-middle">
                <div class="text-center text-center">
                    <h1 class="error-number">403</h1>
                    <h2>Accesso denegado</h2>
                    <p>Se requiere autenticación completa para acceder a este recurso. <a href="{{ route('login') }}">Inicie sesión</a>
                    </p>
                    <div class="mid_center">
                        <h3>Ecomuseo</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
    @endsection
@endif