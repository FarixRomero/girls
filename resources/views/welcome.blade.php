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
                            {{-- <a data-toggle="modal" data-target="#exampleModalLong{{ $file->id }}"> --}}
                               <a href="{{route('user.index',$user->slug)}}">
                                <img class="img-fluid img-thumbnail" src="{{ asset($file->url) }}" alt="">
                                <h4>{{$user->advertisement->titulo}}</h4>
                                <h2 class="btn btn-secondary">
                                    <i class="fas fa-mobile-alt"></i>
                                    {{$user->advertisement->telofono}}</h2>
                                <h2 class="btn btn-secondary">{{$user->advertisement->edad}} años</h2>
                            </a>
                            {{-- </a> --}}
                           
                        </div>
                        <div class="modal fade" id="exampleModalLong{{ $file->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLongTitle{{ $file->url }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle{{ $file->url }}">
                                            {{ $file->url }}</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span>{{ $user->advertisement->telofono }}</span>
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endif
                @endif

            @endforeach

        </div>

    </div>
@endsection
@section('css')

@endsection
