@extends('layouts.app')
@section('content')
    <div class="container ">
        <div class="card border-primary p-4">
            <div class="card-body">
                <h1 class="card-title">Menu</h1>
                {{-- <p class="card-text">Text</p> --}}
            </div>
            <div class="card-deck">

                @if ($user->advertisement)


                    <div class="card">
                        <a href="{{ route('advertisements.edit', $user->advertisement->id) }}">
                            <div class="card-body">
                                <h4 class="card-title">
                                    <i class="fa fa-fw fa-edit"></i>
                                    Editar anuncio
                                </h4>
                            </div>
                        </a>
                    </div>




                @else
                    <div class="card">
                        <a href="{{ route('advertisements.create') }}">
                            <div class="card-body">

                                <h4 class="card-title">
                                    <i class="fa fa-fw fa-edit"></i>
                                    Crear anuncio
                                </h4>
                            </div>
                        </a>
                    </div>
                @endif

                <div class="card">
                    <a href="">
                        <div class="card-body">
                            <h4 class="card-title">
                                <i class="fa fa-fw fa-dollar-sign"></i>
                                Precios
                            </h4>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Contactar</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
@section('css')

@endsection
