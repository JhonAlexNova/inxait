@extends('layouts.app')

@push('page_styles')
<link rel="stylesheet" href="{{url('css/welcome.min.css')}}">
@endpush
@section('content')

<!-- Header -->
<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <h1 class="h1-large">Concurso</h1>
                    <p class="p-large">Dejanos tus datos y participa en el sorteo.</p>
                </div> 
            </div>
            <div class="col-lg-6">
                
            
                <form id="getQuoteForm" action="{{route('usuarios.store')}}" method='POST'>
                    @csrf
                    <div class="row">
                        <div class="col-md-12 form-group">
                            @include('flash::message')
                        </div>
                        <div class="col-md-12 form-group">
                            <h1>Formulario de registro</h1>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="nombre" class="form-control-input" soloAlfabeto="true" required>
                            <label class="label-control" for="gname">Nombres</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text"  name="apellido" class="form-control-input"  soloAlfabeto="true" required>
                            <label class="label-control" for="gname">Apellidos</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text"  name="cedula" class="form-control-input"  required="" soloNumeros="true">
                            <label class="label-control" for="gname">Cedula</label>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text"  name="celular" class="form-control-input" id="gname" required="" soloNumeros="true">
                            <label class="label-control" for="gname">Celular</label>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="email" name="correo" class="form-control-input"  required="">
                            <label class="label-control" for="gname">Correo</label>
                        </div>
                       
                        <div class="form-group col-md-6">
                            <select class="form-control-select" name="departamento_id" required="">
                                <option class="select-option" value="" disabled="" selected="">Departamento</option>
                                @foreach($departamentos as $departamento)
                                    <option class="select-option" value="{{$departamento->id}}"> {{$departamento->nombre}} </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <select class="form-control-select" name='ciudad_id' required="">
                                <option class="select-option" value="" disabled="" selected="">Ciudades</option>
                            </select>
                        </div>

                        <div class="form-group col-md-12 checkbox">
                            <input type="checkbox" name="habeas_data"  value="1">Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en la política de protección de datos personales   
                            <a href="#politicas" data-toggle='#modal'> Haga click
aquí</a>                  
                        </div>

                        
                        <div class="form-group col-md-12">
                            <button type="submit" class="form-control-submit-button">Registrarme</button>
                        </div>
                    </div>
                </form>     
                
            </div> 
        </div> 
    </div> 
    <div class="image-container">
       <!--  <img class="img-fluid" src="images/header.svg" alt="alternative"> -->
    </div> 
    <svg class="frame-decoration" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveaspectratio="none" viewbox="0 0 1920 282.476"><defs><style>.cls-1{fill:#2e5d89;}</style></defs><title>frame-decorative</title><path class="cls-1" d="M0,34.134S305.408-64.19,689.732,72.915c223.7,79.8,438.268,102.561,598.78,46.341C1439.19,66.481,1684.854,39.793,1920,123.939V282.476H0V34.134Z"></path></svg>
</header>





<div id="ganadores" class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="h2-heading">Ganadores sorteo</h2>
                <p class="p-heading">Lista de los ganadores del sorteo de {{count($usuarios)}} registrados</p>
            </div> 
        </div> 
        <div class="row">
            <div class="col-md-12 form-group">
                @if(count($usuarios)>=5)
                    <a href="{{url('seleccionar-ganador')}}" class='btn btn-sm btn-primary'>Seleccionar ganador</a>
                @endif
            </div>
            <div class="col-lg-12 form-group">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#listaGanadores">Ganadores</a></li>
                    <li><a data-toggle="tab" href="#menu1">Usuario registrados</a></li>
                </ul>

                    <div class="tab-content">
                        <div id="listaGanadores" class="tab-pane fade in active show">
                            @include('ganador_sorteos.table-ganadores')
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            @include('usuarios.table')
                        </div>
                    </div>
               
            </div>
        </div> 
    </div> 
</div> 






@endsection

@push('page_scripts')
    <script src="{{url('js/controller/departamentos.js')}}"></script>
@endpush