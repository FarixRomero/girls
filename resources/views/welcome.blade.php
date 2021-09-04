@extends('layouts.app')
{{-- @extends('adminlte::page') --}}

@section('content')
    <div class="container-fluid">
        {{-- <div class="row"> --}}
        {{-- <div class="col"> --}}
        {{-- <div class="card-columns"> --}}
        <!-- Page Content -->
        {{-- <div class="container"> --}}

        {{-- <h1 class="fw-light text-center text-lg-start mt-4 mb-0">
            <img class="img-fluid" src={{asset('/storage/imagenes/logoAQP.png')}} style="width: 20%" alt="">
        </h1> --}}
        {{-- <hr class="mt-2 mb-5"> --}}

        <div class="row text-center text-lg-start">
            @foreach ($users as $user)
                @if ($user->files()->where('tipo', 1)->first())
                    @if ($file = $user->files()->where('tipo', 1)->first())
                        <div class="col-lg-2 col-md-5 col-6">
                            <div class="card">
                                <a href="{{ route('user.index', $user->slug) }}">

                                    <img class="card-img-top" src="{{ asset($file->url) }}" alt="">
                                    <div class="card-body p-1">
                                        <p class="card-title text-left">{{ $user->advertisement->titulo }}</p>
                                        <p class="card-text">
                                        <h2 class="btn btn-secondary">
                                            <i class="fas fa-mobile-alt"></i>
                                            {{ $user->advertisement->telofono }}
                                        </h2>
                                        <h2 class="btn btn-secondary">{{ $user->advertisement->edad }} años</h2>

                                        </p>
                                    </div>
                                </a>

                            </div>
                            {{-- <a href="{{ route('user.index', $user->slug) }}">
                                <img class="img-fluid img-thumbnail" src="{{ asset($file->url) }}" alt="">
                                <p class="text-left">{{ $user->advertisement->titulo }}</p>
                                <h2 class="btn btn-secondary">
                                    <i class="fas fa-mobile-alt"></i>
                                    {{ $user->advertisement->telofono }}
                                </h2>
                                <h2 class="btn btn-secondary">{{ $user->advertisement->edad }} años</h2>
                            </a> --}}
                            {{-- </a> --}}

                        </div>

                    @endif
                @endif

            @endforeach

        </div>

    </div>
@endsection
@section('css')

@endsection
