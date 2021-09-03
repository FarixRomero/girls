@extends('layouts.app')
{{-- @extends('adminlte::page') --}}
@section('content')
    <div class="container" >

        <div class="row " >
            <div class="col-6">
                <h1>
                    {{ $user->advertisement->titulo }}
                </h1>
                <div class=" text-wrap">
                    <h4>
                        {{ $user->advertisement->texto }}

                    </h4>
                </div>

                <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tarifa</h4>
                            <h5>
                               S/.{{ $user->advertisement->tarifa_hora }} x hora

                            </h5>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                Horario
                            
                            </h4>
                            <h5>
                                {{ $user->advertisement->horario }}
                            </h5>
                        </div>
                    </div>
                </div>
               
                <div class="pb-3">
                    <h3>Servicios</h3>
                    @foreach ($user->advertisement->services as $service)
                        <div class="badge badge-primary text-wrap p-2" style="background-color:#DEF2FC; color: black ">
                            <p>{{ $service->descripcion }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="badge badge-primary text-wrap" style="background-color: red;">
                    <h2>No olvides mencionarme que me viste en Placeres Arequipa.</h2>
                </div>
            </div>
            <div class="col-6">
                <img class="img-fluid img-thumbnail" src="{{ asset($user->files->first()->url) }}" alt="">

            </div>

        </div>
        <div class="row">
            @foreach ($user->files as $file)
                <div class="col-lg-3 col-md-4 col-6 ">
                    <img class="img-fluid img-thumbnail" src="{{ asset($file->url) }}" alt="">
                </div>
            @endforeach



        </div>
        <div style="padding-bottom: 100px"></div>
    </div>
    <div class="footer-menu">
        <div class="container d-flex align-items-center " >
            <div class="badge badge-primary p-2" style="background-color:blue ">
                <h3>
                    <p>
                        <i class="fab fa-whatsapp"></i>
                        {{ $user->advertisement->telofono }}
                    </p>
                </h3>
    
            </div>
            <a href="https://api.whatsapp.com/send?phone=+51{{ $user->advertisement->telofono }}"
                style="text-decoration: none;" class="p-3">
                <div class="badge badge-primary p-2" style="background-color:green ">
                    <h3>
                        <p>
                            <i class="fab fa-whatsapp"></i>
                            whatsapp
                        </p>
                    </h3>
    
                </div>
            </a>
    
        </div>
        {{-- <div> --}}
     
        {{-- </div> --}}
    </div>

@endsection

@section('css')
    <style>
        .footer-menu {
            position: fixed;
            bottom: 0;
            width: 100%;
            display: flex;
            justify-content: center;
            align-content: center;
            background-color: red;
            height: 72px;
        }

    </style>

@endsection
